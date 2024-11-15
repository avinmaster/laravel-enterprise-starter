<?php

namespace App\Http\Requests\Auth;

class LoginRequest extends AuthRequest
{
    public const REMEMBER = 'remember';

    public function rules(): array
    {
        return [
            self::REMEMBER => [
                'boolean',
                'nullable',
            ]
        ];
    }

    public function getRemember(): bool
    {
        return $this->get(self::REMEMBER);
    }
}
