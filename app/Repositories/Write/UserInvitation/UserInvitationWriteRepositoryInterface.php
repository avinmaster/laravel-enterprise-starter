<?php

namespace App\Repositories\Write\UserInvitation;

use App\Models\UserInvitation;

interface UserInvitationWriteRepositoryInterface
{
    public function create(array $data): UserInvitation;
    public function update(UserInvitation $userInvitation, array $data): void;
}
