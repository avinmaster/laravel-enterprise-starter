<?php

namespace App\Repositories\Read\Inventory;

use App\Services\Inventory\DTO\IndexInventoryDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface InventoryReadRepositoryInterface
{
    public function index(IndexInventoryDTO $dto): array|Collection;
}
