<?php

namespace App\Exceptions\DeliveryModifier;

use App\Exceptions\BusinessLogicException;

class FailedToDeleteDeliveryModifierException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_DELETE_DELIVERY_MODIFIER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.delivery_modifier.failed_delete');
    }
}
