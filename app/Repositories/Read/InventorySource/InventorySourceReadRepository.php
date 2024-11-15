<?php

namespace App\Repositories\Read\InventorySource;

use App\Models\InventorySource;
use App\Services\InventorySource\DTO\IndexInventorySourceDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class InventorySourceReadRepository implements InventorySourceReadRepositoryInterface
{
    public function index(IndexInventorySourceDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->name, function ($query) use ($dto) {
            $query->where('name', 'like', "%{$dto->name}%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return InventorySource::query();
    }
}
