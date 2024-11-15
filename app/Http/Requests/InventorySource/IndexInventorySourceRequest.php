<?php

namespace App\Http\Requests\InventorySource;

use App\Http\Requests\ListRequest;

class IndexInventorySourceRequest extends ListRequest
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
