<?php

namespace App\Repositories\Read\TargetingExpression;

use App\Models\TargetingExpression;
use App\Services\TargetingExpression\DTO\IndexTargetingExpressionDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface TargetingExpressionReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): TargetingExpression;

    public function index(IndexTargetingExpressionDTO $dto, $relations = []): LengthAwarePaginator;
}
