<?php

namespace App\Services\User\Actions;

use App\Constants\UploadFile\UploadFileConstants;
use App\Http\Resources\User\UserResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use App\Repositories\Write\User\UserWriteRepositoryInterface;

class UploadUserImageAction
{
    public function __construct(
        protected UserReadRepositoryInterface $userReadRepository,
        protected UserWriteRepositoryInterface $userWriteRepository,
    ) {
    }

    public function run(string $image_id, string $user_id): UserResource
    {
        $media = Media::where('uuid', $image_id)
            ->where('collection_name', UploadFileConstants::DEFAULT_FILE_MAIN)
            ->where('model_id', $user_id)
            ->firstOrFail();

        $user = $this->userReadRepository->getById($user_id);
        $existingProfilePhoto = $user->profilePhoto()->first();

        if (
            !$existingProfilePhoto ||
            $existingProfilePhoto->uuid !== $image_id
        ) {
            $this->userWriteRepository->removeProfilePhoto($user);
            $this->userWriteRepository->addProfilePhoto($user, $media);
        }

        return new UserResource($user->load(['profilePhoto']));
    }
}
