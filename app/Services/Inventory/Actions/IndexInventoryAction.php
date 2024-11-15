<?php

namespace App\Services\Inventory\Actions;

use App\Services\Inventory\DTO\IndexInventoryDTO;
use App\Http\Resources\Inventory\InventoryResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\Read\Inventory\InventoryReadRepositoryInterface;

class IndexInventoryAction
{
    public function __construct(
        protected InventoryReadRepositoryInterface $appReadRepository
    ) {
    }

    public function run(IndexInventoryDTO $dto): AnonymousResourceCollection
    {
        $apps = $this->appReadRepository->index($dto);

        return InventoryResource::collection($apps);
    }
}
