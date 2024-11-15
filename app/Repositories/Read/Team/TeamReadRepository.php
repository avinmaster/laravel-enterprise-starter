<?php

namespace App\Repositories\Read\Team;

use App\Exceptions\Team\TeamNotFoundException;
use App\Models\Team;
use App\Repositories\Read\Team\TeamReadRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class TeamReadRepository implements TeamReadRepositoryInterface
{

    /* @throws TeamNotFoundException */
    public function getById(string $team_id): Team
    {
        /* @var Team $team */
        $team = $this->query()
            ->where('id', $team_id)
            ->first();

        if (!$team) { throw new TeamNotFoundException(); }

        return $team;
    }

    /* @throws TeamNotFoundException */
    public function getByOwnerId(string $owner_id): Team
    {
        /* @var Team $team */
        $team = $this->query()
            ->where('owner_id', $owner_id)
            ->first();

        if (!$team) { throw new TeamNotFoundException(); }

        return $team;
    }


    /* @throws TeamNotFoundException */
    public function getOwnerInitialTeamByOwnerId(string $owner_id): Team
    {
        /* @var Team $team */
        $team = $this->query()
            ->where('owner_id', $owner_id)
            ->where('parent_team_id', null)
            ->first();

        if (!$team) { throw new TeamNotFoundException(); }

        return $team;
    }

    private function query(): Builder
    {
        return Team::query();
    }
}
