<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Exceptions\AuthenticationException;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\MeRequest;
use App\Http\Requests\Auth\RefreshTokenRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\CredentialResource;
use App\Http\Resources\User\UserResource;
use App\Services\Auth\Actions\LogOutAction;
use App\Services\Auth\Actions\MeAction;
use App\Services\Auth\Actions\RegisterAction;
use App\Services\Auth\Actions\LoginAction;
use App\Services\Auth\Actions\RefreshTokenAction;
use App\Services\Auth\DTO\LoginDTO;
use App\Services\Auth\DTO\RegisterDTO;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Exceptions\OAuthServerException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthController extends ApiController
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'refreshToken']]);
    }

    /**
     * @throws AuthorizationException
     * @throws AuthenticationException
     * @throws OAuthServerException
     */
    public function login(
        LoginRequest $request,
        LoginAction $loginAction
    ): CredentialResource {
        $dto = LoginDTO::fromRequest($request);
        $result = $loginAction->run($dto);

        return new CredentialResource($result);
    }

    public function register(
        RegisterRequest $request,
        RegisterAction $registerAction
    ): UserResource {
        $dto = RegisterDTO::fromRequest($request);

        return $registerAction->run($dto);
    }

    /**
     * @param LogOutAction $logOutAction
     * @return JsonResponse
     */
    public function logout(LogOutAction $logOutAction): JsonResponse
    {
        $user = Auth::user();
        $logOutAction->run($user);

        return response()->json(status: ResponseAlias::HTTP_NO_CONTENT);
    }

    /**
     * @throws AuthorizationException
     * @throws OAuthServerException
     * @throws AuthenticationException
     */
    public function refreshToken(
        RefreshTokenRequest $request,
        RefreshTokenAction $refreshTokenAction
    ): CredentialResource {
        $result = $refreshTokenAction->run($request->getRefreshToken());

        return new CredentialResource($result);
    }

    public function me(
        MeRequest $meRequest,
        MeAction $meAction
    ): UserResource {
        $user_id = $meRequest->getUserId();

        return $meAction->run($user_id);
    }
}
