<?php

namespace App\Repositories\Read\LineItem;

use App\Exceptions\LineItem\LineItemDoesNotExistException;
use App\Models\LineItem;
use App\Services\LineItem\DTO\IndexLineItemDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;


class LineItemReadRepository implements LineItemReadRepositoryInterface
{
    /**
     * @throws LineItemDoesNotExistException
     */
    public function getById(string $id, array $relations = []): LineItem
    {
        /* @var LineItem $lineItem */
        $lineItem = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$lineItem) {
            throw new LineItemDoesNotExistException();
        }

        return $lineItem;
    }

    public function index(IndexLineItemDTO $dto, array $relations = []): LengthAwarePaginator
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
        return LineItem::query();
    }
}
