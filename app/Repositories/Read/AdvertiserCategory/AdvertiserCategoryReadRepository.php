<?php

namespace App\Repositories\Read\AdvertiserCategory;

use App\Models\AdvertiserCategory;
use App\Services\AdvertiserCategory\DTO\IndexAdvertiserCategoryDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class AdvertiserCategoryReadRepository implements AdvertiserCategoryReadRepositoryInterface
{
    public function index(IndexAdvertiserCategoryDTO $dto): Collection
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
        return AdvertiserCategory::query();
    }
}
