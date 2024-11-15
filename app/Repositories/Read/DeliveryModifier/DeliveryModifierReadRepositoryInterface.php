<?php

namespace App\Repositories\Read\DeliveryModifier;

use App\Models\DeliveryModifier;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Services\DeliveryModifier\DTO\IndexDeliveryModifierDTO;

interface DeliveryModifierReadRepositoryInterface
{
 public function getById(string $id, array $relations = []): DeliveryModifier;

 public function index(IndexDeliveryModifierDTO $dto, array $relations = []): LengthAwarePaginator;
}
