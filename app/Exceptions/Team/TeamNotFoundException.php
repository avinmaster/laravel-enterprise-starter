<?php

namespace App\Exceptions\Team;

use App\Exceptions\BusinessLogicException;

class TeamNotFoundException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::TEAM_NOT_FOUND;
    }

    public function getStatusMessage(): string
    {
        return 'Team not found';
    }
}
