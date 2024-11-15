<?php

namespace App\Exceptions\DeliveryModifier;

use App\Exceptions\BusinessLogicException;

class FailedToCreateDeliveryModifierException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_DELIVERY_MODIFIER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.delivery_modifier.failed_create');
    }
}
