<?php

namespace App\Repositories\Read\List;

use App\Models\ListModel;
use App\Services\List\DTO\IndexListDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ListReadRepository implements ListReadRepositoryInterface
{
    public function index(IndexListDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->type, function ($query) use ($dto) {
            $query->where('type', $dto->type);
        });

        $query->when($dto->search, function ($query) use ($dto) {
            $query->where('name', 'like', "%$dto->search%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return ListModel::query();
    }
}
