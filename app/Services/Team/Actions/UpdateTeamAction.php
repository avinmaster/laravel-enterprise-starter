<?php

namespace App\Services\Team\Actions;

use App\Http\Resources\Team\TeamResource;
use App\Repositories\Read\Team\TeamReadRepositoryInterface;
use App\Repositories\Write\Team\TeamWriteRepositoryInterface;
use App\Services\Team\DTO\UpdateTeamDTO;

class UpdateTeamAction
{
    public function __construct(
        protected TeamWriteRepositoryInterface $teamWriteRepository,
        protected TeamReadRepositoryInterface $teamReadRepository,
    ) {}

    public function run(UpdateTeamDTO $dto): TeamResource
    {
        $team = $this->teamReadRepository->getById($dto->team_id);

        $this->teamWriteRepository->update($team, $this->prepareUpdateData($dto));

        return new TeamResource($team->refresh());
    }

    private function prepareUpdateData(UpdateTeamDTO $dto): array
    {
        return ['name'  => $dto->name];
    }
}
