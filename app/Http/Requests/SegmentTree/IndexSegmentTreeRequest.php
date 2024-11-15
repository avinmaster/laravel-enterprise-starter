<?php

namespace App\Http\Requests\SegmentTree;

use App\Http\Requests\ListRequest;

class IndexSegmentTreeRequest extends ListRequest
{
    public const NAME = 'name';
    public const DATA_PROVIDER_ID = 'data_provider_id';
    public const PARENT_KEY = 'parent_key';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
            ],
            self::DATA_PROVIDER_ID => [
                'string',
            ],
            self::PARENT_KEY => [
                'string',
            ],
        ];
    }

    public function getName(): ?string
    {
        return $this->get(self::NAME);
    }

    public function getDataProviderId(): ?string
    {
        return $this->get(self::DATA_PROVIDER_ID);
    }

    public function getParentKey(): ?string
    {
        return $this->get(self::PARENT_KEY);
    }
}
