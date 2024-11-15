<?php

namespace App\Repositories\Read\Metro;

use App\Services\Metro\DTO\IndexMetroDTO;
use Illuminate\Database\Eloquent\Collection;

interface MetroReadRepositoryInterface
{
    public function index(IndexMetroDTO $dto): Collection;
}
