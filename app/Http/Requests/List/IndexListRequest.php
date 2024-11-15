<?php

namespace App\Http\Requests\List;

use App\Http\Requests\BaseListRequest;

class IndexListRequest extends BaseListRequest
{
    public const SEARCH = 'search';
    public const TYPE = 'type';

    public function rules(): array
    {
        return [
            self::SEARCH => [
                'string',
            ],
            self::TYPE => [
                'string',
            ],
        ];
    }

    public function getSearch(): ?string
    {
        return $this->get(self::SEARCH);
    }

    public function getType(): ?string
    {
        return $this->get(self::TYPE);
    }
}
