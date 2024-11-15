<?php

namespace App\Services\LineItem\Actions;

use App\Http\Resources\LineItem\LineItemResource;
use App\Models\LineItem;
use App\Repositories\Read\LineItem\LineItemReadRepositoryInterface;

class GetLineItemAction
{
    public function __construct(
        protected LineItemReadRepositoryInterface $LineItemReadRepository
    ) {
    }

    public function run(string $id): LineItemResource
    {
        $lineItem = $this->LineItemReadRepository->getById($id, LineItem::RELATIONS);

        return new LineItemResource($lineItem);
    }
}
