<?php

namespace App\Exceptions\App;

use App\Exceptions\BusinessLogicException;

class AppDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::APP_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.app.does_not_exist');
    }
}
