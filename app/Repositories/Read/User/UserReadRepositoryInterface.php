<?php

namespace App\Repositories\Read\User;

use App\Models\User;

interface UserReadRepositoryInterface
{
    public function getByEmail(string $email): User;

    public function getById(string $user_id, array $relations = []): User;
}
