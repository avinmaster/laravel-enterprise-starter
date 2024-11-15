<?php

namespace App\Http\Controllers\Api\V1\TargetingExpression;

use App\Exceptions\TargetingExpression\FailedToCreateTargetingExpressionException;
use App\Http\Controllers\ApiController;
use App\Http\Requests\TargetingExpression\CreateTargetingExpressionRequest;
use App\Http\Requests\TargetingExpression\GetTargetingExpressionRequest;
use App\Http\Requests\TargetingExpression\IndexTargetingExpressionRequest;
use App\Http\Resources\TargetingExpression\TargetingExpressionResource;
use App\Services\TargetingExpression\Actions\CreateTargetingExpressionAction;
use App\Services\TargetingExpression\Actions\GetTargetingExpressionAction;
use App\Services\TargetingExpression\Actions\IndexTargetingExpressionAction;
use App\Services\TargetingExpression\DTO\CreateTargetingExpressionDTO;
use App\Services\TargetingExpression\DTO\IndexTargetingExpressionDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TargetingExpressionController extends ApiController
{
    public function show(
        GetTargetingExpressionRequest $request,
        GetTargetingExpressionAction $getTargetingExpressionAction
    ): TargetingExpressionResource {
        return $getTargetingExpressionAction->run($request->getId());
    }

    public function index(
        IndexTargetingExpressionRequest $indexTargetingExpressionRequest,
        IndexTargetingExpressionAction $indexTargetingExpressionAction
    ): AnonymousResourceCollection {
        $dto = IndexTargetingExpressionDTO::fromRequest($indexTargetingExpressionRequest);

        return $indexTargetingExpressionAction->run($dto);
    }

    /**
     * @throws FailedToCreateTargetingExpressionException
     */
    public function create(
        CreateTargetingExpressionRequest $createTargetingExpressionRequest,
        CreateTargetingExpressionAction $createTargetingExpressionAction
    ): TargetingExpressionResource {
        $dto = CreateTargetingExpressionDTO::fromRequest($createTargetingExpressionRequest);

        return $createTargetingExpressionAction->run($dto);
    }
}