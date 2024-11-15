<?php

namespace App\Services\UserInvitation\DTO;

use App\Http\Requests\UserInvitation\SendUserInvitationRequest;
use Spatie\LaravelData\Data;

class SendUserInvitationDTO extends Data
{
    public string $email;
    public string $sender_id;

    public static function fromRequest(SendUserInvitationRequest $request): self
    {
        return self::from([
            'email'     => $request->getEmail(),
            'sender_id' => $request->user()->id,
        ]);
    }
}
