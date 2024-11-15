<?php

namespace App\Services\BidModifier\Actions;

use App\Http\Resources\BidModifier\BidModifierResource;
use App\Repositories\Read\BidModifier\BidModifierReadRepositoryInterface;

class GetBidModifierAction
{
    public function __construct(private readonly BidModifierReadRepositoryInterface $bidModifierReadRepository
    ) {
    }

    public function run(string $id): BidModifierResource
    {
        $bidModifier = $this->bidModifierReadRepository->getById($id);

        return new BidModifierResource($bidModifier);
    }
}
