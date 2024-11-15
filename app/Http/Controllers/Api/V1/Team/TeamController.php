<?php

namespace App\Http\Controllers\Api\V1\Team;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Team\CreateTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Http\Resources\Team\TeamResource;
use App\Services\Team\Actions\CreateTeamAction;
use App\Services\Team\Actions\UpdateTeamAction;
use App\Services\Team\DTO\CreateTeamDTO;
use App\Services\Team\DTO\UpdateTeamDTO;

class TeamController extends ApiController
{
    public function create(
        CreateTeamRequest $createTeamRequest,
        CreateTeamAction $createTeamAction
    ): TeamResource {
        $dto = CreateTeamDTO::fromRequest($createTeamRequest);

        return $createTeamAction->run($dto);
    }

    public function update(
        UpdateTeamRequest $updateTeamRequest,
        UpdateTeamAction $updateTeamAction
    ): TeamResource {
        $dto = UpdateTeamDTO::fromRequest($updateTeamRequest);

        return $updateTeamAction->run($dto);
    }
}
