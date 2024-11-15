<?php

namespace App\Repositories\Write\DeliveryModifier;

use App\Models\DeliveryModifier;

interface DeliveryModifierWriteRepositoryInterface
{
    public function create(array $data): DeliveryModifier;

    public function update(string $id, array $data): bool;

    public function delete(string $id): bool;
}
