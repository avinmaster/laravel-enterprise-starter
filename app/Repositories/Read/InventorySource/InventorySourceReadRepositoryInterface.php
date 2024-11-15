<?php

namespace App\Repositories\Read\InventorySource;

use App\Services\InventorySource\DTO\IndexInventorySourceDTO;
use Illuminate\Database\Eloquent\Collection;

interface InventorySourceReadRepositoryInterface
{
    public function index(IndexInventorySourceDTO $dto): Collection;
}
