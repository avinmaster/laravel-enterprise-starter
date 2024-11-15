<?php

namespace App\Services\UserInvitation\Actions;

use App\Services\UserInvitation\DTO\SendUserInvitationDTO;
use App\Services\UserInvitation\Tasks\CreateUserInvitationTask;
use App\Services\UserInvitation\Tasks\SendUserInvitationTask;

class SendUserInvitationAction
{
    public function __construct(
        protected CreateUserInvitationTask $createUserInvitationTask,
        protected SendUserInvitationTask $sendUserInvitationTask,
    ) {}

    public function run(SendUserInvitationDTO $dto): void
    {
        $userInvitation = $this->createUserInvitationTask->run($dto);
        $this->sendUserInvitationTask->run($dto->email, $userInvitation->hash);
    }
}
