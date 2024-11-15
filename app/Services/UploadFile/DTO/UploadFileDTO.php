<?php

namespace App\Services\UploadFile\DTO;

use App\Http\Requests\UploadFile\UploadFileRequest;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;

class UploadFileDTO extends Data
{
    public string $user_id;
    public UploadedFile $file;

    public static function fromRequest(UploadFileRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'file' => $request->getUploadFile()
        ]);
    }
}
