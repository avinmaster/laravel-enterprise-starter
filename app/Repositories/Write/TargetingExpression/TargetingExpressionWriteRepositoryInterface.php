<?php

namespace App\Repositories\Write\TargetingExpression;

use App\Models\TargetingExpression;

interface TargetingExpressionWriteRepositoryInterface
{
    public function create(array $data): TargetingExpression;
}
