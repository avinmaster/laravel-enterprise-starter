<?php

namespace App\Exceptions\Team;

use App\Exceptions\BusinessLogicException;

class FailedToCreateTeamException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_TEAM;
    }

    public function getStatusMessage(): string
    {
        return 'Failed to create team';
    }
}
