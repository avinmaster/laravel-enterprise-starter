<?php

namespace App\Exceptions\DeliveryModifier;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateDeliveryModifierException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_DELIVERY_MODIFIER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.delivery_modifier.failed_update');
    }
}
