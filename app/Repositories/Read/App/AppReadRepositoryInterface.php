<?php

namespace App\Repositories\Read\App;

use App\Services\App\DTO\IndexAppDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface AppReadRepositoryInterface
{
    public function index(IndexAppDTO $dto): array|Collection;
}
