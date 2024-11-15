<?php

namespace App\Http\Controllers\Api\V1\UserInvitation;

use App\Http\Controllers\ApiController;
use App\Http\Requests\UserInvitation\SendUserInvitationRequest;
use App\Services\UserInvitation\Actions\SendUserInvitationAction;
use App\Services\UserInvitation\DTO\SendUserInvitationDTO;
use Illuminate\Http\JsonResponse;

class UserInvitationController extends ApiController
{
    public function send(
        SendUserInvitationRequest $sendUserInvitationRequest,
        SendUserInvitationAction $sendUserInvitationAction
    ): JsonResponse {
        $dto = SendUserInvitationDTO::fromRequest($sendUserInvitationRequest);
        $sendUserInvitationAction->run($dto);

        return response()->json();
    }
}
