<?php

namespace App\Services\Auth\Actions;

use App\Exceptions\AuthenticationException;
use App\Services\Auth\DTO\LoginDTO;
use Illuminate\Auth\Access\AuthorizationException;
use Laravel\Passport\Exceptions\OAuthServerException;

class LoginAction extends ParentAuthAction
{
    /**
     * @throws AuthorizationException
     * @throws OAuthServerException
     * @throws AuthenticationException
     */
    public function run(LoginDTO $dto): array
    {
        $this->init($dto);

        $this->createServerRequest();

        $this->getPassportCredentials();

        $this->withParsedBodyToServerRequest();

        $this->createAuthenticationToken();

        return $this->tokenData;
    }

    private function init(LoginDTO $dto): void
    {
        $this->dto = $dto;
        $this->user = $this->userReadRepository->getByEmail($this->dto->email);
    }
}
