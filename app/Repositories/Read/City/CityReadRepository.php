<?php

namespace App\Repositories\Read\City;

use App\Models\City;
use App\Services\City\DTO\IndexCityDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CityReadRepository implements CityReadRepositoryInterface
{
    public function index(IndexCityDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->search, function ($query) use ($dto) {
            $query->where('name', 'like', "%$dto->search%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return City::query();
    }
}
