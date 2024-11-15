<?php

namespace App\Repositories\Read\Region;

use App\Models\Region;
use App\Services\Region\DTO\IndexRegionDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class RegionReadRepository implements RegionReadRepositoryInterface
{
    public function index(IndexRegionDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->search, function ($query) use ($dto) {
            $query->where('region_name', 'like', "%$dto->search%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return Region::query();
    }
}
