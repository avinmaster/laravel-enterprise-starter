<?php

namespace App\Http\Requests\Timezone;

use App\Http\Requests\ListRequest;

class IndexTimezoneRequest extends ListRequest
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
