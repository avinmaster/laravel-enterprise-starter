<?php

namespace App\Services\CreativeLineItem\Actions;

use App\Http\Resources\CreativeLineItem\CreativeLineItemResource;
use App\Repositories\Read\CreativeLineItem\CreativeLineItemReadRepositoryInterface;
use App\Services\CreativeLineItem\DTO\IndexCreativeLineItemDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCreativeLineItemAction
{
    public function __construct(
        protected CreativeLineItemReadRepositoryInterface $CreativeLineItemReadRepository
    ) {
    }

    public function run(IndexCreativeLineItemDTO $dto): AnonymousResourceCollection
    {
        $creativeLineItems = $this->CreativeLineItemReadRepository->index($dto);

        return CreativeLineItemResource::collection($creativeLineItems);
    }
}
