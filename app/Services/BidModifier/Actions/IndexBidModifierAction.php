<?php

namespace App\Services\BidModifier\Actions;

use App\Services\BidModifier\DTO\IndexBidModifierDTO;
use App\Http\Resources\BidModifier\BidModifierResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\Read\BidModifier\BidModifierReadRepositoryInterface;

class IndexBidModifierAction
{
    public function __construct(private readonly BidModifierReadRepositoryInterface $bidModifierReadRepository
    ) {
    }

    public function run(IndexBidModifierDTO $dto): AnonymousResourceCollection
    {
        $bidModifiers = $this->bidModifierReadRepository->index($dto, ['bidModifierTerms']);

        return BidModifierResource::collection($bidModifiers);
    }
}
