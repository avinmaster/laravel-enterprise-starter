<?php

namespace App\Repositories\Read\Language;

use App\Models\Language;
use App\Services\Language\DTO\IndexLanguageDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class LanguageReadRepository implements LanguageReadRepositoryInterface
{
    public function index(IndexLanguageDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->name, function ($query) use ($dto) {
            $query->where('name', 'like', "%{$dto->name}%");
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return Language::query();
    }
}
