<?php

namespace App\Repositories\Read\BidModifier;

use App\Models\BidModifier;
use Illuminate\Database\Eloquent\Builder;
use App\Services\BidModifier\DTO\IndexBidModifierDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Exceptions\BidModifier\BidModifierDoesNotExistException;

class BidModifierReadRepository implements BidModifierReadRepositoryInterface
{
    private function query(): Builder
    {
        return BidModifier::query();
    }

    public function index(IndexBidModifierDTO $dto, array $relations = []): LengthAwarePaginator
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

    /**
     * @throws BidModifierDoesNotExistException
     */
    public function getById(string $id, array $relations = []): BidModifier
    {
        /* @var BidModifier $bidModifier */
        $bidModifier = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$bidModifier) {
            throw new BidModifierDoesNotExistException();
        }

        return $bidModifier;
    }
}
