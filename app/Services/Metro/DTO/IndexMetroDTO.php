<?php

namespace App\Services\Metro\DTO;

use App\Http\Requests\Metro\IndexMetroRequest;
use Spatie\LaravelData\Data;

class IndexMetroDTO extends Data
{
    public ?string $search;

    public static function fromRequest(IndexMetroRequest $request): self
    {
        return self::from([
            'search' => $request->getSearch(),
        ]);
    }
}
