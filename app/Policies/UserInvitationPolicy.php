<?php

namespace App\Policies;

use App\Constants\UserInvitation\UserInvitationConstants;
use App\Repositories\Read\UserInvitation\UserInvitationReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserInvitationPolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected UserInvitationReadRepositoryInterface $userInvitationReadRepository
    ) {}

    public function invitationHashIsValid(string $hash, string $email): bool
    {
        $userInvitation = $this->userInvitationReadRepository->getByHash($hash);

        return $userInvitation->status === UserInvitationConstants::STATUS_SENT && $userInvitation->email === $email;
    }
}
