<?php

namespace App\Repositories\Read\DataProvider;

use App\Services\DataProvider\DTO\IndexDataProviderDTO;
use Illuminate\Database\Eloquent\Collection;

interface DataProviderReadRepositoryInterface
{
    public function index(IndexDataProviderDTO $dto): Collection;
}
