<?php

namespace App\Services\Team\Tasks;

use App\Models\Team;
use App\Repositories\Write\Team\TeamWriteRepositoryInterface;
use App\Services\Team\DTO\CreateTeamDTO;

class CreateTeamForRegisteredUserTask
{
    public function __construct(
        protected TeamWriteRepositoryInterface $teamWriteRepository,
    ) {}

    public function run(CreateTeamDTO $dto): Team
    {
        $teamData = Team::createModel($dto);

        return $this->teamWriteRepository->create($teamData);
    }
}
