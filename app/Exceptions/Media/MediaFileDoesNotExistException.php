<?php

namespace App\Exceptions\Media;

use App\Exceptions\BusinessLogicException;

class MediaFileDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::MEDIA_FILE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.media.file_does_not_exist');
    }
}
