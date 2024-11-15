<?php

namespace App\Services\InventorySource\Actions;

use App\Http\Resources\InventorySource\InventorySourceResource;
use App\Repositories\Read\InventorySource\InventorySourceReadRepositoryInterface;
use App\Services\InventorySource\DTO\IndexInventorySourceDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexInventorySourceAction
{
    public function __construct(
        protected InventorySourceReadRepositoryInterface $readRepository
    ) {
    }

    public function run(IndexInventorySourceDTO $dto): AnonymousResourceCollection
    {
        $data = $this->readRepository->index($dto);

        return InventorySourceResource::collection($data);
    }
}
