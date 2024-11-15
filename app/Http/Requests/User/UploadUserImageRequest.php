<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UploadUserImageRequest extends FormRequest
{
    public const ID = 'id';
    public const IMAGE_ID = 'image_id';

    public function rules(): array
    {
        return [
           self::IMAGE_ID => [
               'uuid',
               'required',
           ]
        ];
    }

    public function getImageId(): string
    {
        return $this->get(self::IMAGE_ID);
    }

    public function getUserId(): string
    {
        return $this->user()->id;
    }

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
