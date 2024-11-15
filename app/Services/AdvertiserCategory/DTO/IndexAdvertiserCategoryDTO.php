<?php

namespace App\Services\AdvertiserCategory\DTO;

use App\Http\Requests\AdvertiserCategory\IndexAdvertiserCategoryRequest;
use Spatie\LaravelData\Data;

class IndexAdvertiserCategoryDTO extends Data
{
    public array $sorts;

    public static function fromRequest(IndexAdvertiserCategoryRequest $request): self
    {
        return self::from([
            'sorts' => $request->getSort(),
        ]);
    }
}
