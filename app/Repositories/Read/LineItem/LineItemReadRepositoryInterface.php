<?php

namespace App\Repositories\Read\LineItem;

use App\Models\LineItem;
use App\Services\LineItem\DTO\IndexLineItemDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface LineItemReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): LineItem;

    public function index(IndexLineItemDTO $dto, array $relations = []): LengthAwarePaginator;
}
