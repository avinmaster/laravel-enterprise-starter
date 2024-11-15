<?php

namespace App\Exceptions\User;

use App\Exceptions\BusinessLogicException;

class FailedToCreateUserException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_USER;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to create user';
    }
}
