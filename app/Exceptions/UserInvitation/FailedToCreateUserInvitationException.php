<?php

namespace App\Exceptions\UserInvitation;

use App\Exceptions\BusinessLogicException;

class FailedToCreateUserInvitationException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_USER_INVITATION;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to create user invitation';
    }
}
