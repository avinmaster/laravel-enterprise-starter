<?php

namespace App\Exceptions\UserInvitation;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateUserInvitationException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_USER_INVITATION;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to update user invitation data';
    }
}
