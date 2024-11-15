<?php

namespace App\Repositories\Read\Continent;

use App\Services\Continent\DTO\IndexContinentDTO;
use Illuminate\Database\Eloquent\Collection;

interface ContinentReadRepositoryInterface
{
    public function index(IndexContinentDTO $dto): Collection;
}
