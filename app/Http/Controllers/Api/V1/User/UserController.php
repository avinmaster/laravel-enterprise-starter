<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Http\Requests\User\UploadUserImageRequest;
use App\Http\Resources\User\UserResource;
use App\Services\User\Actions\UploadUserImageAction;

class UserController extends ApiController
{
    public function uploadImage(
        UploadUserImageRequest $request,
        UploadUserImageAction $uploadUserImageAction
    ): UserResource {

        return $uploadUserImageAction->run($request->getImageId(), $request->getUserId());
    }
}
