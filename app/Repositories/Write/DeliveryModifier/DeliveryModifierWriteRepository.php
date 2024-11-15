<?php

namespace App\Repositories\Write\DeliveryModifier;

use App\Exceptions\DeliveryModifier\FailedToUpdateDeliveryModifierException;
use App\Models\DeliveryModifier;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\DeliveryModifier\DeliveryModifierDoesNotExistException;
use App\Exceptions\DeliveryModifier\FailedToCreateDeliveryModifierException;
use App\Exceptions\DeliveryModifier\FailedToDeleteDeliveryModifierException;

class DeliveryModifierWriteRepository implements DeliveryModifierWriteRepositoryInterface
{
    private function query(): Builder
    {
        return DeliveryModifier::query();
    }

    /**
     * @throws FailedToCreateDeliveryModifierException
     */
    public function create(array $data): DeliveryModifier
    {
        /* @var DeliveryModifier $delivery */
        if (!$delivery = $this->query()->create($data)) {
            throw new FailedToCreateDeliveryModifierException();
        }

        return $delivery;
    }

    /**
     * @throws FailedToUpdateDeliveryModifierException()
     * @throws DeliveryModifierDoesNotExistException
     */
    public function update(string $id, array $data): bool
    {
        $deliveryModifier = $this->query()->find($id);

        if (!$deliveryModifier) {
            throw new DeliveryModifierDoesNotExistException();
        }

        if (!$deliveryModifier->update($data)) {
            throw new FailedToUpdateDeliveryModifierException();
        }

        return true;
    }

    /**
     * @throws FailedToDeleteDeliveryModifierException
     * @throws DeliveryModifierDoesNotExistException
     */
    public function delete(string $id): bool
    {
        $deliveryModifier = $this->query()
            ->with(['deliveryModifierTerms.deliveryModifierTermTargetings'])
            ->find($id);

        if (!$deliveryModifier) {
            throw new DeliveryModifierDoesNotExistException();
        }

        $deliveryModifier->deliveryModifierTerms()->each(function ($term) {
            $term->deliveryModifierTermTargetings()->delete();
        });

        $deliveryModifier->deliveryModifierTerms()->delete();
        if (!$deliveryModifier->delete()) {
            throw new FailedToDeleteDeliveryModifierException();
        }

        return true;
    }
}
