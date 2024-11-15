<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepositoryInterface;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryModifierPolicy
{
    use HandlesAuthorization;

    public function __construct(
        protected DeliveryModifierReadRepositoryInterface $deliveryModifierReadRepository
    ) {
    }

    public function get(User $user, string $deliveryModifier_id): bool
    {
        return $this->isOwner($user, $deliveryModifier_id);
    }

    public function update(User $user, string $deliveryModifier_id): bool
    {
        return $this->isOwner($user, $deliveryModifier_id);
    }

    public function delete(User $user, string $deliveryModifier_id): bool
    {
        return $this->isOwner($user, $deliveryModifier_id);
    }

    private function isOwner(User $user, string $deliveryModifier_id): bool
    {
        $deliveryModifier = $this->deliveryModifierReadRepository->getById($deliveryModifier_id);

        return $user->id === $deliveryModifier->user_id;
    }
}

