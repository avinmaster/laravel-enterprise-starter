<?php

namespace App\Repositories\Read\List;

use App\Services\List\DTO\IndexListDTO;
use Illuminate\Database\Eloquent\Collection;

interface ListReadRepositoryInterface
{
    public function index(IndexListDTO $dto): Collection;
}
