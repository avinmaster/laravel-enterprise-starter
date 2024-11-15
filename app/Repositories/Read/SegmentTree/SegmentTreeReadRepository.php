<?php

namespace App\Repositories\Read\SegmentTree;

use App\Models\SegmentTree;
use App\Services\SegmentTree\DTO\IndexSegmentTreeDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class SegmentTreeReadRepository implements SegmentTreeReadRepositoryInterface
{
    public function index(IndexSegmentTreeDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->name, function ($query) use ($dto) {
            $query->where('name', 'like', "%{$dto->name}%");
        });

        $query->when($dto->data_provider_id, function ($query) use ($dto) {
            $query->where('data_provider_id', $dto->data_provider_id);
        });

        $query->when($dto->parent_key, function ($query) use ($dto) {
            $query->where('parent_key', $dto->parent_key);
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return SegmentTree::query();
    }
}
