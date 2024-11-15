<?php

namespace App\Repositories\Read\Metro;

use App\Models\Metro;
use App\Services\Metro\DTO\IndexMetroDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class MetroReadRepository implements MetroReadRepositoryInterface
{
    public function index(IndexMetroDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->search, function ($query) use ($dto) {
            $query->where('name', 'like', "%$dto->search%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return Metro::query();
    }
}
