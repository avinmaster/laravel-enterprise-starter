<?php

namespace App\Exceptions\Advertiser;

use App\Exceptions\BusinessLogicException;

class FailedToCreateAdvertiserException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_ADVERTISER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.advertiser.failed_create');
    }
}
