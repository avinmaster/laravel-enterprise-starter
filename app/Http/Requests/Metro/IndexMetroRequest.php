<?php

namespace App\Http\Requests\Metro;

use App\Http\Requests\BaseListRequest;

class IndexMetroRequest extends BaseListRequest
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
