<?php

namespace App\Exceptions\Creative;

use App\Exceptions\BusinessLogicException;

class CreativeDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::CREATIVE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative.does_not_exist');
    }
}
