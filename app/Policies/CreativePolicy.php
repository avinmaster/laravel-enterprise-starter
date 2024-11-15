<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreativePolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected CreativeReadRepositoryInterface $creativeReadRepository
    ) {
    }

    public function get(User $user, string $creative_id): bool
    {
        return $this->isOwner($user, $creative_id);
    }

    public function update(User $user, string $creative_id): bool
    {
        return $this->isOwner($user, $creative_id);
    }

    public function delete(User $user, string $creative_id): bool
    {
        return $this->isOwner($user, $creative_id);
    }

    private function isOwner(User $user, string $creative_id): bool
    {
        $creative = $this->creativeReadRepository->getById($creative_id);

        return $user->id === $creative->user_id;
    }
}

