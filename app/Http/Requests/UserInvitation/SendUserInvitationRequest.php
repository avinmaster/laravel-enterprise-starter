<?php

namespace App\Http\Requests\UserInvitation;

use Illuminate\Foundation\Http\FormRequest;

class SendUserInvitationRequest extends FormRequest
{
    public const EMAIL = 'email';

    public function rules(): array
    {
        return [
            self::EMAIL => [
                'required',
                'string',
                'email',
                'unique:users'
            ]
        ];
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }
}
