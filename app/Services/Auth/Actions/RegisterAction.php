<?php

namespace App\Services\Auth\Actions;

use App\Http\Resources\User\UserResource;
use App\Models\Role;
use App\Repositories\Read\Team\TeamReadRepositoryInterface;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use App\Repositories\Read\UserInvitation\UserInvitationReadRepositoryInterface;
use App\Repositories\Write\User\UserWriteRepositoryInterface;
use App\Repositories\Write\UserInvitation\UserInvitationWriteRepositoryInterface;
use App\Services\Auth\DTO\RegisterDTO;
use App\Services\Team\DTO\CreateTeamDTO;
use App\Services\Team\Tasks\CreateTeamForRegisteredUserTask;
use App\Services\User\Tasks\CreateUserTask;
use App\Services\UserInvitation\Tasks\CloseUserInvitationTask;

class RegisterAction
{
    public function __construct(
        protected CloseUserInvitationTask $closeUserInvitationTask,
        protected CreateTeamForRegisteredUserTask $createTeamForRegisteredUserTask,
        protected CreateUserTask $createUserTask,
        protected TeamReadRepositoryInterface $teamReadRepository,
        protected UserInvitationReadRepositoryInterface $userInvitationReadRepository,
        protected UserInvitationWriteRepositoryInterface $userInvitationWriteRepository,
        protected UserReadRepositoryInterface $userReadRepository,
        protected UserWriteRepositoryInterface $userWriteRepository,
    ) {}

    public function run(RegisterDTO $dto): UserResource
    {
        $user = $this->createUserTask->run($dto);

        if ($dto->hash) {
            $userInvitation = $this->userInvitationReadRepository->getByHash($dto->hash);
            $this->closeUserInvitationTask->run($userInvitation);

            $team = $this->teamReadRepository->getOwnerInitialTeamByOwnerId($userInvitation->sender_id);
        } else {
            $user->assignRole(Role::ROLE_OWNER);

            $createTeamDTO = CreateTeamDTO::fromData($user->id, $user->email);
            $team = $this->createTeamForRegisteredUserTask->run($createTeamDTO);
        }

        $user->teams()->attach($team->id);

        return new UserResource($user->load('teams')->refresh());
    }
}
