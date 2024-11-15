<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function response(array $data = [], bool $success = true, int $status = Response::HTTP_OK): JsonResponse
    {
        return new JsonResponse(['data' => $data, 'success' => $success], $status);
    }

    public function responseNoContent(): JsonResponse
    {
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
