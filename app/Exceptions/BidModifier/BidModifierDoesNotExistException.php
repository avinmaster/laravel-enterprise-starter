<?php

namespace App\Exceptions\BidModifier;

use App\Exceptions\BusinessLogicException;

class BidModifierDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::BID_MODIFIER_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.bid_modifier.does_not_exist');
    }
}
