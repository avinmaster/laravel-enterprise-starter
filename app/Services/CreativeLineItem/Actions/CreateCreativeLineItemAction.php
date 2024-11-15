<?php

namespace App\Services\CreativeLineItem\Actions;

use App\Http\Resources\CreativeLineItem\CreativeLineItemResource;
use App\Models\CreativeLineItem;
use App\Repositories\Write\CreativeLineItem\CreativeLineItemWriteRepositoryInterface;
use App\Services\CreativeLineItem\DTO\CreateCreativeLineItemDTO;

class CreateCreativeLineItemAction
{
    public function __construct(
        protected CreativeLineItemWriteRepositoryInterface $CreativeLineItemWriteRepository
    ) {
    }

    public function run(CreateCreativeLineItemDTO $dto): CreativeLineItemResource
    {
        $data = CreativeLineItem::createModel($dto);

        $creativeLineItem = $this->CreativeLineItemWriteRepository->create($data);

        return new CreativeLineItemResource($creativeLineItem);
    }
}
