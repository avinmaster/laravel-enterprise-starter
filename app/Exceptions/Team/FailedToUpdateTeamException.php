<?php

namespace App\Exceptions\Team;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateTeamException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_TEAM;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to update team';
    }
}
