<?php

namespace App\Exceptions\User;

use App\Exceptions\BusinessLogicException;

class UserDoesNotExistException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::USER_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return 'User does not exist';
    }
}
