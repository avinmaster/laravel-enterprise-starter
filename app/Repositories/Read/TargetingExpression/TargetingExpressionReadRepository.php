<?php

namespace App\Repositories\Read\TargetingExpression;

use App\Exceptions\TargetingExpression\TargetingExpressionModuleDoesNotExistException;
use App\Models\TargetingExpression;
use App\Services\TargetingExpression\DTO\IndexTargetingExpressionDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class TargetingExpressionReadRepository implements TargetingExpressionReadRepositoryInterface
{
    /**
     * @throws TargetingExpressionModuleDoesNotExistException
     */
    public function getById(string $id, array $relations = []): TargetingExpression
    {
        /**@var TargetingExpression $targetingExpression */
        $targetingExpression = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$targetingExpression) {
            throw new TargetingExpressionModuleDoesNotExistException();
        }

        return $targetingExpression;
    }

    public function index(IndexTargetingExpressionDTO $dto, $relations = []): LengthAwarePaginator
    {
        return $this->query()
            ->where('user_id', $dto->user_id)
            ->with($relations)
            ->paginate(
                $dto->pagination->per_page,
                ['*'],
                'page',
                $dto->pagination->page
            );
    }
    
    private function query(): Builder
    {
        return TargetingExpression::query();
    }
}
