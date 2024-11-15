<?php

namespace App\Services\List\DTO;

use App\Http\Requests\List\IndexListRequest;
use Spatie\LaravelData\Data;

class IndexListDTO extends Data
{
    public ?string $search;
    public ?string $type;

    public static function fromRequest(IndexListRequest $request): self
    {
        return self::from([
            'search' => $request->getSearch(),
            'type' => $request->getType(),
        ]);
    }
}
