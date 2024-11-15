<?php

namespace App\Repositories\Write\TargetingExpression;

use App\Exceptions\TargetingExpression\FailedToCreateTargetingExpressionException;
use App\Models\TargetingExpression;
use Illuminate\Database\Eloquent\Builder;

class TargetingExpressionWriteRepository implements TargetingExpressionWriteRepositoryInterface
{
    /**
     * @throws FailedToCreateTargetingExpressionException
     */
    public function create(array $data): TargetingExpression
    {
        /* @var TargetingExpression $targetingExpression */
        if (!$targetingExpression = $this->query()->create($data)) {
            throw new FailedToCreateTargetingExpressionException();
        }

        return $targetingExpression;
    }

    private function query(): Builder
    {
        return TargetingExpression::query();
    }
}
