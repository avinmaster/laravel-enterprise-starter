<?php

namespace App\Http\Requests\CreativeTemplate;

use App\Http\Requests\BaseListRequest;

class IndexCreativeTemplateRequest extends BaseListRequest
{
    public const CREATIVE_TYPE = 'creative_type';

    public function rules(): array
    {
        return [
            self::CREATIVE_TYPE => [
                'integer',
            ],
        ];
    }

    public function getCreativeType(): ?int
    {
        return $this->get(self::CREATIVE_TYPE);
    }
}
