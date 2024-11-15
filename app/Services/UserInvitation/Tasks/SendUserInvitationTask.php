<?php

namespace App\Services\UserInvitation\Tasks;

use App\Repositories\Write\UserInvitation\UserInvitationWriteRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class SendUserInvitationTask
{
    const INVITATION_EMAIL_SUBJECT = "Invitation to join";

    public function __construct(
        protected UserInvitationWriteRepositoryInterface $userInvitationWriteRepository,
    ) {}

    public function run(string $email, string $hash): void {
        Mail::send([], [], function ($message) use ($email, $hash) {
            $message->to($email)
                ->subject(self::INVITATION_EMAIL_SUBJECT)
                ->text($this->generateUserInvitationEmailText($hash), 'text/plain');
        });
    }

    private function generateUserInvitationEmailText(string $hash): string
    {
        return config('app.frontend_url')
            . config('app.frontend_paths.register')
            . "?hash=" . $hash;
    }
}
