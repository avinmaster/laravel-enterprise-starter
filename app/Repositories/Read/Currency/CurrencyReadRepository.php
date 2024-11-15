<?php

namespace App\Repositories\Read\Currency;

use App\Models\Currency;
use App\Services\Currency\DTO\IndexCurrencyDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CurrencyReadRepository implements CurrencyReadRepositoryInterface
{
    public function index(IndexCurrencyDTO $dto): Collection
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
        return Currency::query();
    }
}
