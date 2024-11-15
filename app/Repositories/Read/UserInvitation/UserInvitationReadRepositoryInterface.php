<?php

namespace App\Repositories\Read\UserInvitation;

use App\Models\UserInvitation;

interface UserInvitationReadRepositoryInterface
{
    public function getById(string $user_invitation_id): UserInvitation;
    public function getByHash(string $hash): UserInvitation;
}
