<?php

namespace App\Repositories\Read\Inventory;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Inventory\DTO\IndexInventoryDTO;
use Illuminate\Database\Eloquent\Collection;

class InventoryReadRepository implements InventoryReadRepositoryInterface
{
    private function query(): Builder
    {
        return Inventory::query();
    }

    public function index(IndexInventoryDTO $dto): array|Collection
    {
        return $this->query()
            ->where('placement_id', 'like', "%{$dto->placement_id}%")
            ->where('site_id', 'like', "%{$dto->site_id}%")
            ->get();
    }
}
