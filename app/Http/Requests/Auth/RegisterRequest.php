<?php

namespace App\Http\Requests\Auth;

use App\Policies\UserInvitationPolicy;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public const FIRST_NAME = 'first_name';
    public const LAST_NAME  = 'last_name';
    public const EMAIL      = 'email';
    public const PASSWORD   = 'password';
    public const HASH       = 'hash';
    public const PHONE      = 'phone';

    public function authorize(UserInvitationPolicy $userInvitationPolicy): bool
    {
        $hash = $this->get(self::HASH);
        $email = $this->get(self::EMAIL);

        if ($hash) {
            return $userInvitationPolicy->invitationHashIsValid($hash, $email);
        }

        return true;
    }

    public function rules(): array
    {
        return [
            self::FIRST_NAME => [
                'required',
                'string',
                'between:2,255',
            ],
            self::LAST_NAME => [
                'required',
                'string',
                'between:2,255',
            ],
            self::EMAIL => [
                'required',
                'string',
                'email',
                'unique:users',
            ],
            self::PASSWORD => [
                'required',
                'string',
                'between:5,255',
            ],
            self::HASH => [
                'string',
                'size:32',
                'exists:user_invitations'
            ],
            self::PHONE=> [
                'required',
                'string',
            ],
        ];
    }

    public function getFirstName(): string
    {
        return $this->get(self::FIRST_NAME);
    }

    public function getLastName(): string
    {
        return $this->get(self::LAST_NAME);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

    public function getHash(): ?string
    {
        return $this->get(self::HASH) ?? null;
    }

    public function getPhone(): string
    {
        return $this->get(self::PHONE);
    }
}
