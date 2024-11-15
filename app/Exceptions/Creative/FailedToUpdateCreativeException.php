<?php

namespace App\Exceptions\Creative;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateCreativeException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_CREATIVE;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative.failed_update');
    }
}
