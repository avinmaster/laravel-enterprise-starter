<?php

namespace App\Repositories\Read\Region;

use App\Services\Region\DTO\IndexRegionDTO;
use Illuminate\Database\Eloquent\Collection;

interface RegionReadRepositoryInterface
{
    public function index(IndexRegionDTO $dto): Collection;
}
