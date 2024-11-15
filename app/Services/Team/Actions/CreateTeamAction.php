<?php

namespace App\Services\Team\Actions;

use App\Http\Resources\Team\TeamResource;
use App\Models\Team;
use App\Repositories\Read\Team\TeamReadRepositoryInterface;
use App\Repositories\Write\Team\TeamWriteRepositoryInterface;
use App\Services\Team\DTO\CreateTeamDTO;

class CreateTeamAction
{
    public function __construct(
        protected TeamWriteRepositoryInterface $teamWriteRepository,
        protected TeamReadRepositoryInterface $teamReadRepository,
    ) {}

    public function run(CreateTeamDTO $dto): TeamResource
    {
        $mainTeam = $this->teamReadRepository->getByOwnerId($dto->owner_id);
        $dto->parent_team_id = $mainTeam->id;

        $teamData = Team::createModel($dto);
        $team = $this->teamWriteRepository->create($teamData);
        $team->members()->attach($dto->owner_id);

        return new TeamResource($team);
    }
}
