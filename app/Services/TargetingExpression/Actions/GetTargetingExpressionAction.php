<?php

namespace App\Services\TargetingExpression\Actions;

use App\Http\Resources\TargetingExpression\TargetingExpressionResource;
use App\Models\TargetingExpression;
use App\Repositories\Read\TargetingExpression\TargetingExpressionReadRepositoryInterface;

class GetTargetingExpressionAction
{
    public function __construct(
        protected TargetingExpressionReadRepositoryInterface $targetingExpressionReadRepository
    ) {
    }

    public function run(string $id): TargetingExpressionResource
    {
        $targetingExpression = $this->targetingExpressionReadRepository->getById($id, TargetingExpression::RELATIONS);

        return new TargetingExpressionResource($targetingExpression);
    }
}
