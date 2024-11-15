<?php

namespace App\Services\Auth\Actions;

use App\Exceptions\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Laravel\Passport\Exceptions\OAuthServerException;

class RefreshTokenAction extends ParentAuthAction
{
    /**
     * @param string $refreshToken
     * @return array
     * @throws AuthorizationException
     * @throws AuthenticationException
     * @throws OAuthServerException
     */
    public function run(string $refreshToken): array
    {
        $this->createServerRequest();

        $this->getPassportCredentials();

        $this->withParsedBodyToServerRequestForRefreshToken($refreshToken);

        $this->createAuthenticationToken();

        return $this->tokenData;
    }
}
