<?php

namespace App\Services\DeliveryModifier\Actions;

use App\Repositories\Write\DeliveryModifier\DeliveryModifierWriteRepositoryInterface;

class DeleteDeliveryModifierAction
{
    public function __construct(
        protected DeliveryModifierWriteRepositoryInterface $deliveryModifierWriteRepository
    ) {
    }

    public function run(string $id): void
    {
        $this->deliveryModifierWriteRepository->delete($id);
    }
}
