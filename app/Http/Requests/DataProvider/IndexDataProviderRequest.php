<?php

namespace App\Http\Requests\DataProvider;

use App\Http\Requests\ListRequest;

class IndexDataProviderRequest extends ListRequest
{
    public const NAME = 'name';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
            ],
        ];
    }

    public function getName(): ?string
    {
        return $this->get(self::NAME);
    }
}
