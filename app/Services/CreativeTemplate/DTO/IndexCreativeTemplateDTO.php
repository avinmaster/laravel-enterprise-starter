<?php

namespace App\Services\CreativeTemplate\DTO;

use App\Http\Requests\CreativeTemplate\IndexCreativeTemplateRequest;
use Spatie\LaravelData\Data;

class IndexCreativeTemplateDTO extends Data
{
    public array $sorts;
    public ?int $creative_type;

    public static function fromRequest(IndexCreativeTemplateRequest $request): self
    {
        return self::from([
            'sorts' => $request->getSort(),
            'creative_type' => $request->getCreativeType(),
        ]);
    }
}
