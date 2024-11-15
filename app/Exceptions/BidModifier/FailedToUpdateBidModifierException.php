<?php

namespace App\Exceptions\BidModifier;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateBidModifierException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_BID_MODIFIER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.bid_modifier.failed_update');
    }
}
