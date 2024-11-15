<?php

namespace App\Repositories\Read\Team;

use App\Models\Team;

interface TeamReadRepositoryInterface
{
    public function getById(string $team_id): Team;
    public function getByOwnerId(string $owner_id): Team;
    public function getOwnerInitialTeamByOwnerId(string $owner_id): Team;
}
