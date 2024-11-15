<?php

namespace App\Http\Controllers\Api\V1\UploadFile;

use App\Http\Resources\Media\MediaResource;
use App\Services\UploadFile\DTO\UploadFileDTO;
use App\Http\Requests\UploadFile\UploadFileRequest;
use App\Services\UploadFile\Actions\UploadFileAction;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;

class UploadFileController
{
    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function upload(
        UploadFileRequest $request,
        UploadFileAction $uploadFileAction
    ): MediaResource {
        $dto = UploadFileDTO::fromRequest($request);

        return $uploadFileAction->run($dto);
    }
}
