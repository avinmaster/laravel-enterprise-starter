<?php

namespace App\Exceptions\Creative;

use App\Exceptions\BusinessLogicException;

class FailedToDeleteCreativeException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_DELETE_CREATIVE;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative.failed_delete');
    }
}
