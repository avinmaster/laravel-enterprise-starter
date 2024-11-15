<?php

namespace App\Services\Auth\Actions;

use App\Http\Resources\User\UserResource;
use App\Repositories\Read\User\UserReadRepositoryInterface;

class MeAction
{
    public function __construct(
        protected UserReadRepositoryInterface $userReadRepository,
    ) {
    }

    public function run(string $user_id): UserResource
    {
        $user = $this->userReadRepository->getById($user_id);

        return new UserResource($user->load(['teams', 'profilePhoto']));
    }
}
