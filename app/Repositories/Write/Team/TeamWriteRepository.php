<?php

namespace App\Repositories\Write\Team;

use App\Exceptions\Team\FailedToCreateTeamException;
use App\Exceptions\Team\FailedToUpdateTeamException;
use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;

class TeamWriteRepository implements TeamWriteRepositoryInterface
{
    /* @throws FailedToCreateTeamException */
    public function create(array $data): Team
    {
        /* @var Team $team */
        if (!$team = $this->query()->create($data)) {
            throw new FailedToCreateTeamException();
        }

        return $team;
    }

    /* @throws FailedToUpdateTeamException */
    public function update(Team $team, array $data): void
    {
        if(!$team->update($data)) {
            throw new FailedToUpdateTeamException();
        };
    }

    private function query(): Builder
    {
        return Team::query();
    }
}
