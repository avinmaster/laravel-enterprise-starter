<?php

namespace App\Exceptions;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Access\AuthorizationException;
use App\Exceptions\AuthenticationException as CoreAuthenticationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Exception\NotFoundException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<Throwable>, LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->reportable(static function (Throwable $e) {
        });

        $this->renderable(function (\Exception $e) {
            return $this->buildResponse($e);
        });

        $this->renderable(function (NotFoundHttpException $e) {
            return $this->buildResponse(new NotFoundException());
        });

        $this->renderable(function (AccessDeniedHttpException $e, $request) {
            return $this->shouldReturnJson($request, $e)
                ? $this->buildResponse(new NotAuthorizedResourceException())
                : redirect()->guest(route(RouteServiceProvider::UNAUTHORIZED));
        });
    }

    private function buildResponse(\Exception $e): JsonResponse
    {
        if (config('app.debug')) {
            $response = [
                'message' => $e->getMessage(),
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTrace(),
            ];
        } else {
            $response = [
                'message' => $e->getMessage(),
            ];
        }

        return response()->json($response, (int)$e->getCode());
    }

    protected function unauthenticated($request, AuthenticationException $exception): JsonResponse|RedirectResponse
    {
        return $this->shouldReturnJson($request, $exception)
            ? $this->buildResponse(new CoreAuthenticationException())
            : redirect()->guest(route(RouteServiceProvider::LOGIN));
    }

    public function render($request, Throwable $exception): Response|JsonResponse|ResponseAlias|RedirectResponse
    {
        if (Str::contains($exception->getMessage(), 'Duplicate entry')) {
            return response()->json([
                'message' => 'Duplicate entry',
                'errors' => $exception->getMessage()
            ], 400);
        }

        $httpCode = ResponseAlias::HTTP_INTERNAL_SERVER_ERROR;
        $statusCode =  $exception->getCode();
        $details = [
            'message' => $exception->getMessage(),
        ];

        if ($exception instanceof ValidationException) {
            $httpCode = ResponseAlias::HTTP_UNPROCESSABLE_ENTITY;
            $statusCode = BusinessLogicException::VALIDATION_FAILED;
            $details['message'] = $exception->getMessage();
            foreach ($exception->errors() as $key => $error) {
                $details['errors'][$key] = $error[0] ?? 'Unknown error';
            }
        }

        if ($exception instanceof ValidationException) {
            $httpCode = ResponseAlias::HTTP_UNPROCESSABLE_ENTITY;
            $statusCode = BusinessLogicException::VALIDATION_FAILED;
            $details['message'] = $exception->getMessage();
        }

        if ($exception instanceof NotFoundHttpException || $exception instanceof ModelNotFoundException) {
            $httpCode = ResponseAlias::HTTP_NOT_FOUND;
            $statusCode = ResponseAlias::HTTP_NOT_FOUND;
            $details['message'] = 'Not Found';
        }

        if ($exception instanceof BadRequestHttpException) {
            $httpCode = ResponseAlias::HTTP_BAD_REQUEST;
            $statusCode = ResponseAlias::HTTP_BAD_REQUEST;
            $details['message'] = 'Bad Request';
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            $httpCode = ResponseAlias::HTTP_METHOD_NOT_ALLOWED;
            $statusCode = ResponseAlias::HTTP_METHOD_NOT_ALLOWED;
            $details['message'] = 'Method Not Allowed';
        }

        if ($exception instanceof AuthorizationException) {
            $httpCode = ResponseAlias::HTTP_FORBIDDEN;
            $statusCode = ResponseAlias::HTTP_FORBIDDEN;
            $details['message'] = $exception->getMessage();
        }

        if ($exception instanceof AuthenticationException) {
            $httpCode = ResponseAlias::HTTP_UNAUTHORIZED;
            $statusCode = ResponseAlias::HTTP_UNAUTHORIZED;
            $details['message'] = 'Unauthenticated.';
        }

        if ($exception instanceof BusinessLogicException) {
            $httpCode = $exception->getHttpStatusCode();
            $statusCode = $exception->getStatus();
            $details['message'] = $exception->getStatusMessage();
        }

        $data = [
            'status'  => $statusCode,
            'errors' => $details,
        ];

        if ($httpCode === ResponseAlias::HTTP_INTERNAL_SERVER_ERROR && !config('app.debug')) {
            $data['errors'] = [
                'message' => 'Server error',
            ];
        }

        return response()->json($data, $httpCode);
    }
}
