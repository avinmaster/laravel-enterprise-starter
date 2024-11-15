<?php

namespace App\Repositories\Read\City;

use App\Services\City\DTO\IndexCityDTO;
use Illuminate\Database\Eloquent\Collection;

interface CityReadRepositoryInterface
{
    public function index(IndexCityDTO $dto): Collection;
}
