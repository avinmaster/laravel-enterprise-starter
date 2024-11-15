<?php

namespace App\Repositories\Read\User;

use App\Exceptions\User\UserDoesNotExistException;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserReadRepository implements UserReadRepositoryInterface
{
    /* @throws UserDoesNotExistException */
    public function getByEmail(string $email): User
    {
        /* @var User $user */
        $user = $this->query()->where('email', $email)->first();

        if (!$user) { throw new UserDoesNotExistException(); }

        return $user;
    }

    /* @throws UserDoesNotExistException */
    public function getById(string $user_id, array $relations = []): User
    {
        /* @var User $user */
        $user = $this->query()
            ->where('id', $user_id)
            ->with($relations)
            ->first();

        if (!$user) { throw new UserDoesNotExistException(); }

        return $user;
    }

    private function query(): Builder
    {
        return User::query();
    }
}
