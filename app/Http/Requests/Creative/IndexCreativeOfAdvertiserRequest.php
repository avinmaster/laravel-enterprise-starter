<?php

namespace App\Http\Requests\Creative;

use App\Http\Requests\ListRequest;

class IndexCreativeOfAdvertiserRequest extends ListRequest
{
    public const WITH_TRASHED = 'with_trashed';
    public const ADVERTISER_ID = 'advertiser_id';

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

    public function getAdvertiserId(): string
    {
        return $this->route(self::ADVERTISER_ID);
    }
}
