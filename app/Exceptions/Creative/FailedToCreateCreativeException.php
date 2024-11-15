<?php

namespace App\Exceptions\Creative;

use App\Exceptions\BusinessLogicException;

class FailedToCreateCreativeException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_CREATIVE;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative.failed_create');
    }
}
