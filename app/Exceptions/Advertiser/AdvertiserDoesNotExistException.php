<?php

namespace App\Exceptions\Advertiser;

use App\Exceptions\BusinessLogicException;

class AdvertiserDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::ADVERTISER_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.advertiser.does_not_exist');
    }
}
