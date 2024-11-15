<?php

namespace App\Services\UploadFile\Actions;


use App\Constants\UploadFile\UploadFileConstants;
use App\Http\Resources\Media\MediaResource;
use App\Services\UploadFile\DTO\UploadFileDTO;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;

class UploadFileAction
{
    public function __construct(
        protected UserReadRepositoryInterface $userReadRepository
    ) {
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function run(UploadFileDTO $dto): MediaResource
    {
        $user = $this->userReadRepository->getById($dto->user_id);

        $file = $user->addMedia($dto->file)->toMediaCollection(UploadFileConstants::DEFAULT_FILE_MAIN);

        return new MediaResource($file);
    }
}
