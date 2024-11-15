<?php

namespace App\Http\Requests\Advertiser;

use Illuminate\Foundation\Http\FormRequest;

class DeleteAdvertiserRequest extends FormRequest
{
    public const ID = 'id';

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
