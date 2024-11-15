<?php

namespace App\Http\Requests\City;

use App\Http\Requests\BaseListRequest;

class IndexCityRequest extends BaseListRequest
{
    public const SEARCH = 'search';

    public function rules(): array
    {
        return [
            self::SEARCH => [
                'string',
            ],
        ];
    }

    public function getSearch(): ?string
    {
        return $this->get(self::SEARCH);
    }
}
