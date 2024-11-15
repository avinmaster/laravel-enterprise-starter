<?php

namespace App\Services\TargetingExpression\Actions;

use App\Http\Resources\TargetingExpression\TargetingExpressionResource;
use App\Models\TargetingExpression;
use App\Repositories\Read\TargetingExpression\TargetingExpressionReadRepositoryInterface;
use App\Services\TargetingExpression\DTO\IndexTargetingExpressionDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexTargetingExpressionAction
{
    public function __construct(
        protected TargetingExpressionReadRepositoryInterface $targetingExpressionReadRepository
    ) {
    }

    public function run(IndexTargetingExpressionDTO $dto): AnonymousResourceCollection
    {
        $targetingExpressions = $this->targetingExpressionReadRepository->index($dto, TargetingExpression::RELATIONS);

        return TargetingExpressionResource::collection($targetingExpressions);
    }
}
