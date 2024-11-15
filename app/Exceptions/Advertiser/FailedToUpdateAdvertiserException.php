<?php

namespace App\Exceptions\Advertiser;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateAdvertiserException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_ADVERTISER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.advertiser.failed_update');
    }
}
