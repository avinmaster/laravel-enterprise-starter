<?php

namespace App\Services\UserInvitation\Tasks;

use App\Constants\UserInvitation\UserInvitationConstants;
use App\Models\UserInvitation;
use App\Repositories\Write\UserInvitation\UserInvitationWriteRepositoryInterface;

class CloseUserInvitationTask
{
    public function __construct(
        protected UserInvitationWriteRepositoryInterface $userInvitationWriteRepository,
    ) {}

    public function run(UserInvitation $userInvitation): void
    {
        $userInvitationData = $this->prepareUserInvitationUpdateData();
        $this->userInvitationWriteRepository->update($userInvitation, $userInvitationData);
    }

    private function prepareUserInvitationUpdateData(): array
    {
        return [
            'status' => UserInvitationConstants::STATUS_ACCEPTED,
        ];
    }
}
