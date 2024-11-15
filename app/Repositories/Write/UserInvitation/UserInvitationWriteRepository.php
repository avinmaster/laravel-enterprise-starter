<?php

namespace App\Repositories\Write\UserInvitation;

use App\Exceptions\UserInvitation\FailedToCreateUserInvitationException;
use App\Exceptions\UserInvitation\FailedToUpdateUserInvitationException;
use App\Models\UserInvitation;
use Illuminate\Database\Eloquent\Builder;

class UserInvitationWriteRepository implements UserInvitationWriteRepositoryInterface
{
    /* @throws FailedToCreateUserInvitationException */
    public function create(array $data): UserInvitation
    {
        /* @var UserInvitation $userInvitation */
        if (!$userInvitation = $this->query()->create($data)) {
            throw new FailedToCreateUserInvitationException();
        }

        return $userInvitation;
    }

    /* @throws FailedToUpdateUserInvitationException */
    public function update(UserInvitation $userInvitation, array $data): void
    {
        if(!$userInvitation->update($data)) {
            throw new FailedToUpdateUserInvitationException();
        };
    }

    private function query(): Builder
    {
        return UserInvitation::query();
    }
}
