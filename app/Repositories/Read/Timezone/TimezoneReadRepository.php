<?php

namespace App\Repositories\Read\Timezone;

use App\Models\Timezone;
use App\Services\Timezone\DTO\IndexTimezoneDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class TimezoneReadRepository implements TimezoneReadRepositoryInterface
{
    public function index(IndexTimezoneDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->name, function ($query) use ($dto) {
            $query->where('name', 'like', "%{$dto->name}%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return Timezone::query();
    }
}
