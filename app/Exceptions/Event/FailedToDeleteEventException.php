<?php

namespace App\Exceptions\Event;

use App\Exceptions\BusinessLogicException;

class FailedToDeleteEventException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_DELETE_EVENT;
    }

    public function getStatusMessage(): string
    {
        return __('errors.event.failed_delete');
    }
}
