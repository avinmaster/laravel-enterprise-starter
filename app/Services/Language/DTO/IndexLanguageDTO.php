<?php

namespace App\Services\Language\DTO;

use App\Http\Requests\Language\IndexLanguageRequest;
use Spatie\LaravelData\Data;

class IndexLanguageDTO extends Data
{
    public string|null $name;

    public static function fromRequest(IndexLanguageRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
        ]);
    }
}
