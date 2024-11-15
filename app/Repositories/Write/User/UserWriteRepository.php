<?php

namespace App\Repositories\Write\User;

use App\Constants\User\UserConstants;
use App\Exceptions\User\FailedToCreateUserException;
use App\Exceptions\User\FailedToUpdateUserException;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UserWriteRepository implements UserWriteRepositoryInterface
{
    /* @throws FailedToCreateUserException */
    public function create(array $data): User
    {
        /* @var User $user */
        if (!$user = $this->query()->create($data)) {
            throw new FailedToCreateUserException();
        }

        return $user;
    }

    /* @throws FailedToUpdateUserException */
    public function update(User $user, array $data): void
    {
        if(!$user->update($data)) {
            throw new FailedToUpdateUserException();
        };
    }

    public function addProfilePhoto(User $user, Media $media): void
    {
        $media->collection_name = UserConstants::PROFILE_PHOTO;
        $user->profilePhoto()->save($media);
    }

    public function removeProfilePhoto(User $user): void
    {
        $user->clearMediaCollection(UserConstants::PROFILE_PHOTO);
    }

    private function query(): Builder
    {
        return User::query();
    }
}
