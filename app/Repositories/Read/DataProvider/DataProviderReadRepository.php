<?php

namespace App\Repositories\Read\DataProvider;

use App\Models\DataProvider;
use App\Services\DataProvider\DTO\IndexDataProviderDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class DataProviderReadRepository implements DataProviderReadRepositoryInterface
{
    public function index(IndexDataProviderDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->name, function ($query) use ($dto) {
            $query->where('name', 'like', "%{$dto->name}%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return DataProvider::query();
    }
}
