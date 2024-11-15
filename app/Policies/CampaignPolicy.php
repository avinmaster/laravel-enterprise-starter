<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Read\Campaign\CampaignReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class CampaignPolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected CampaignReadRepositoryInterface $campaignReadRepository
    ) {
    }

    public function get(User $user, string $campaign_id): bool
    {
        return $this->isOwner($user, $campaign_id);
    }

    public function update(User $user, string $campaign_id): bool
    {
        return $this->isOwner($user, $campaign_id);
    }

    public function delete(User $user, string $campaign_id): bool
    {
        return $this->isOwner($user, $campaign_id);
    }

    private function isOwner(User $user, string $campaign_id): bool
    {
        $campaign = $this->campaignReadRepository->getById($campaign_id);

        return $user->id === $campaign->user_id;
    }
}

