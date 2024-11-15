<?php

namespace App\Services\CreativeLineItem\Actions;

use App\Http\Resources\CreativeLineItem\CreativeLineItemResource;
use App\Repositories\Read\CreativeLineItem\CreativeLineItemReadRepositoryInterface;

class GetCreativeLineItemAction
{
    public function __construct(
        protected CreativeLineItemReadRepositoryInterface $creativeLineItemReadRepository
    ) {
    }

    public function run(string $id): CreativeLineItemResource
    {
        $CreativeLineItem = $this->creativeLineItemReadRepository->getById($id);

        return new CreativeLineItemResource($CreativeLineItem);
    }
}
