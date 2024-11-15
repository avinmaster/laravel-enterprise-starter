<?php

namespace App\Services\User\Tasks;

use App\Models\User;
use App\Repositories\Write\User\UserWriteRepositoryInterface;
use App\Services\Auth\DTO\RegisterDTO;

class CreateUserTask
{
    public function __construct(
        protected UserWriteRepositoryInterface $userWriteRepository,
    ) {}

    public function run(RegisterDTO $dto): User
    {
        $userData = User::createModel($dto);

        return $this->userWriteRepository->create($userData);
    }
}
