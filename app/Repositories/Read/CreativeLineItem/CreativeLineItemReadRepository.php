<?php

namespace App\Repositories\Read\CreativeLineItem;

use App\Exceptions\CreativeLineItem\CreativeLineItemDoesNotExistException;
use App\Models\CreativeLineItem;
use App\Services\CreativeLineItem\DTO\IndexCreativeLineItemDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class CreativeLineItemReadRepository implements CreativeLineItemReadRepositoryInterface
{
    /**
     * @throws CreativeLineItemDoesNotExistException
     */
    public function getById(string $id, array $relations = []): CreativeLineItem
    {
        /* @var CreativeLineItem $creativeLineItem */
        $creativeLineItem = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$creativeLineItem) {
            throw new CreativeLineItemDoesNotExistException();
        }

        return $creativeLineItem;
    }

    public function index(IndexCreativeLineItemDTO $dto, array $relations = []): LengthAwarePaginator
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
        return CreativeLineItem::query();
    }
}
