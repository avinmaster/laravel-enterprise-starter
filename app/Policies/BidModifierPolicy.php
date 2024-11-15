<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Read\BidModifier\BidModifierReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class BidModifierPolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected BidModifierReadRepositoryInterface $bidModifierReadRepository
    ) {
    }

    public function get(User $user, string $bidModifier_id): bool
    {
        return $this->isOwner($user, $bidModifier_id);
    }

    public function update(User $user, string $bidModifier_id): bool
    {
        return $this->isOwner($user, $bidModifier_id);
    }

    public function delete(User $user, string $bidModifier_id): bool
    {
        return $this->isOwner($user, $bidModifier_id);
    }

    private function isOwner(User $user, string $bidModifier_id): bool
    {
        $bidModifier = $this->bidModifierReadRepository->getById($bidModifier_id);

        return $user->id === $bidModifier->user_id;
    }
}

