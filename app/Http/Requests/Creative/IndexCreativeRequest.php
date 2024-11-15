<?php

namespace App\Http\Requests\Creative;

use App\Http\Requests\ListRequest;

class IndexCreativeRequest extends ListRequest
{
    public const WITH_TRASHED = 'with_trashed';

    public function rules(): array
    {
        return [
            self::WITH_TRASHED => [
                'nullable',
                'boolean',
            ],
        ];
    }

    public function getWithTrashed(): ?bool
    {
        return $this->get(self::WITH_TRASHED);
    }
}
