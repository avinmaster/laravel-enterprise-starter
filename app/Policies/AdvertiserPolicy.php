<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertiserPolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected AdvertiserReadRepositoryInterface $advertiserReadRepository
    ) {
    }

    public function get(User $user, string $advertiser_id): bool
    {
        return $this->isOwner($user, $advertiser_id);
    }

    public function update(User $user, string $advertiser_id): bool
    {
        return $this->isOwner($user, $advertiser_id);
    }

    public function delete(User $user, string $advertiser_id): bool
    {
        return $this->isOwner($user, $advertiser_id);
    }

    private function isOwner(User $user, string $advertiser_id): bool
    {
        $advertiser = $this->advertiserReadRepository->getById($advertiser_id);

        return $user->id === $advertiser->user_id;
    }
}

