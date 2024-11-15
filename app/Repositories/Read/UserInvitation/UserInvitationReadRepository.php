<?php

namespace App\Repositories\Read\UserInvitation;

use App\Exceptions\UserInvitation\UserInvitationNotFoundException;
use App\Models\UserInvitation;
use Illuminate\Database\Eloquent\Builder;

class UserInvitationReadRepository implements UserInvitationReadRepositoryInterface
{

    /* @throws UserInvitationNotFoundException */
    public function getById(string $user_invitation_id): UserInvitation
    {
        /* @var UserInvitation $user_invitation */
        $user_invitation = $this->query()
            ->where('id', $user_invitation_id)
            ->first();

        if (!$user_invitation) { throw new UserInvitationNotFoundException(); }

        return $user_invitation;
    }

    /* @throws UserInvitationNotFoundException */
    public function getByHash(string $hash): UserInvitation
    {
        /* @var UserInvitation $user_invitation */
        $user_invitation = $this->query()
            ->where('hash', $hash)
            ->first();

        if (!$user_invitation) { throw new UserInvitationNotFoundException(); }

        return $user_invitation;
    }

    private function query(): Builder
    {
        return UserInvitation::query();
    }
}
