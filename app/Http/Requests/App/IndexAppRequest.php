<?php

namespace App\Http\Requests\App;

use App\Http\Requests\BaseListRequest;

class IndexAppRequest extends BaseListRequest
{
    public const APP_NAME = 'app_name';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            self::APP_NAME => [
                'string',
                'nullable',
            ],
        ];
    }

    public function getAppName(): ?string
    {
        return $this->get(self::APP_NAME);
    }
}
