<?php

namespace App\Services\DeliveryModifier\Actions;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Services\DeliveryModifier\DTO\IndexDeliveryModifierDTO;
use App\Http\Resources\DeliveryModifier\DeliveryModifierResource;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepositoryInterface;

class IndexDeliveryModifierAction
{
    public function __construct(
        protected DeliveryModifierReadRepositoryInterface $deliveryModifierReadRepository
    ) {
    }

    public function run(IndexDeliveryModifierDTO $dto): AnonymousResourceCollection
    {
        $deliveries = $this->deliveryModifierReadRepository->index(
            $dto,
            ['deliveryModifierTerms.deliveryModifierTermTargetings']
        );

        return DeliveryModifierResource::collection($deliveries);
    }
}
