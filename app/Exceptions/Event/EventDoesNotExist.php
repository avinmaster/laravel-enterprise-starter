<?php

namespace App\Exceptions\Event;

use App\Exceptions\BusinessLogicException;

class EventDoesNotExist extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::EVENT_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.event.does_not_exist');
    }
}
