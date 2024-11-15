<?php

namespace App\Repositories\Write\BidModifier;

use App\Exceptions\BidModifier\FailedToUpdateBidModifierException;
use App\Models\BidModifier;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\BidModifier\FailedToCreateBidModifierException;

class BidModifierWriteRepository implements BidModifierWriteRepositoryInterface
{
    private function query(): Builder
    {
        return BidModifier::query();
    }

    /**
     * @throws FailedToCreateBidModifierException
     */
    public function create(array $data): BidModifier
    {
        /* @var BidModifier $bidModifier */
        if (!$bidModifier = $this->query()->create($data)) {
            throw new FailedToCreateBidModifierException();
        }

        return $bidModifier;
    }

    /**
     * @throws FailedToUpdateBidModifierException
     */
    public function update(string $id, array $data): bool
    {
        if (!$this->query()->where('id', $id)->update($data)) {
            throw new FailedToUpdateBidModifierException();
        }

        return true;
    }
}
