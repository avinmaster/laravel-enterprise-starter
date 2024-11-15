<?php

namespace App\Repositories\Read\Continent;

use App\Models\Continent;
use App\Services\Continent\DTO\IndexContinentDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ContinentReadRepository implements ContinentReadRepositoryInterface
{
    public function index(IndexContinentDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->sorts, function ($query) use ($dto) {
            foreach ($dto->sorts as $sort) {
                $query->orderBy($sort['value'], $sort['key']);
            }
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return Continent::query();
    }
}
