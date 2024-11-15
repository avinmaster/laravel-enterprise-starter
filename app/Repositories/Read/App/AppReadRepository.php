<?php

namespace App\Repositories\Read\App;

use App\Models\App;
use Illuminate\Database\Eloquent\Builder;
use App\Services\App\DTO\IndexAppDTO;
use Illuminate\Database\Eloquent\Collection;

class AppReadRepository implements AppReadRepositoryInterface
{
    private function query(): Builder
    {
        return App::query();
    }

    public function index(IndexAppDTO $dto): array|Collection
    {
        return $this->query()
            ->where('app_name', 'like', "%{$dto->app_name}%")
            ->get();
    }
}
