<?php

namespace App\Repositories\Read\Timezone;

use App\Services\Timezone\DTO\IndexTimezoneDTO;
use Illuminate\Database\Eloquent\Collection;

interface TimezoneReadRepositoryInterface
{
    public function index(IndexTimezoneDTO $dto): Collection;
}
