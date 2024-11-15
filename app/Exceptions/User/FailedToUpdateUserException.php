<?php

namespace App\Exceptions\User;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateUserException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_USER;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to update user data';
    }
}
