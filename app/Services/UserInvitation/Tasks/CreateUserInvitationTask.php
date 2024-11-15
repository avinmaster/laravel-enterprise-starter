<?php

namespace App\Services\UserInvitation\Tasks;

use App\Models\UserInvitation;
use App\Repositories\Write\UserInvitation\UserInvitationWriteRepositoryInterface;
use App\Services\UserInvitation\DTO\SendUserInvitationDTO;

class CreateUserInvitationTask
{
    public function __construct(
        protected UserInvitationWriteRepositoryInterface $userInvitationWriteRepository,
    ) {}

    public function run(SendUserInvitationDTO $dto): UserInvitation
    {
        $userData = UserInvitation::createModel($dto);

        return $this->userInvitationWriteRepository->create($userData);
    }
}
