<?php

namespace App\Exceptions\UserInvitation;

use App\Exceptions\BusinessLogicException;

class UserInvitationNotFoundException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::USER_INVITATION_NOT_FOUND;
    }

    public function getStatusMessage(): string
    {
        return 'User invitation not found';
    }
}
