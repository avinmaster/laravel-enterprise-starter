<?php

namespace App\Repositories\Read\CreativeLineItem;

use App\Models\CreativeLineItem;
use App\Services\CreativeLineItem\DTO\IndexCreativeLineItemDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CreativeLineItemReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): CreativeLineItem;

    public function index(IndexCreativeLineItemDTO $dto, array $relations = []): LengthAwarePaginator;
}
