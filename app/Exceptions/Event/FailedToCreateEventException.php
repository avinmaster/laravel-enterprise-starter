<?php

namespace App\Exceptions\Event;

use App\Exceptions\BusinessLogicException;

class FailedToCreateEventException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_EVENT;
    }

    public function getStatusMessage(): string
    {
        return __('errors.event.failed_create');
    }
}
