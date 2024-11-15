<?php

namespace App\Http\Requests\UploadFile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

class UploadFileRequest extends FormRequest
{
    public const FILE = 'file';

    public function rules(): array
    {
        return [
            self::FILE => [
                'file',
                'required',
                'max:80000',
            ],
        ];
    }

    public function getUploadFile(): UploadedFile
    {
        return $this->file(self::FILE);
    }
}
