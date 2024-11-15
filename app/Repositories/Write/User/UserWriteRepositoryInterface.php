<?php

namespace App\Repositories\Write\User;

use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

interface UserWriteRepositoryInterface
{
    public function create(array $data): User;

    public function update(User $user, array $data): void;

    public function addProfilePhoto(User $user, Media $media): void;

    public function removeProfilePhoto(User $user): void;
}
