<?php

namespace App\Http\Requests\Advertiser;

use Illuminate\Foundation\Http\FormRequest;

class BulkDeleteAdvertiserRequest extends FormRequest
{
    public const IDS = 'ids';

    public function rules(): array
    {
        return [
            self::IDS => [
                'array',
                'required'
            ]
        ];
    }

    public function getIds(): array
    {
        return $this->get(self::IDS);
    }
}
