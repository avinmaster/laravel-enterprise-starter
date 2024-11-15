<?php

namespace App\Exceptions\DeliveryModifier;

use App\Exceptions\BusinessLogicException;

class DeliveryModifierDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::DELIVERY_MODIFIER_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.delivery_modifier.does_not_exist');
    }
}
