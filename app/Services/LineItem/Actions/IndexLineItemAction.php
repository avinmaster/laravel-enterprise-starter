<?php

namespace App\Services\LineItem\Actions;

use App\Http\Resources\LineItem\LineItemResource;
use App\Models\LineItem;
use App\Repositories\Read\LineItem\LineItemReadRepositoryInterface;
use App\Services\LineItem\DTO\IndexLineItemDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexLineItemAction
{
    public function __construct(
        protected LineItemReadRepositoryInterface $LineItemReadRepository
    ) {
    }

    public function run(IndexLineItemDTO $dto): AnonymousResourceCollection
    {
        $lineItems = $this->LineItemReadRepository->index($dto, LineItem::RELATIONS);

        return LineItemResource::collection($lineItems);
    }
}
