<?php

namespace App\Services\DeliveryModifier\Actions;

use App\Http\Resources\DeliveryModifier\DeliveryModifierResource;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepositoryInterface;

class GetDeliveryModifierAction
{
    public function __construct(
        protected DeliveryModifierReadRepositoryInterface $deliveryModifierReadRepository
    ) {
    }

    public function run(string $id): DeliveryModifierResource
    {
        $delivery = $this->deliveryModifierReadRepository->getById(
            $id,
            ['deliveryModifierTerms.deliveryModifierTermTargetings']
        );

        return new DeliveryModifierResource($delivery);
    }
}
