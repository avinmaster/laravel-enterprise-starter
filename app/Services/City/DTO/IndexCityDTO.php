<?php

namespace App\Services\City\DTO;

use App\Http\Requests\City\IndexCityRequest;
use Spatie\LaravelData\Data;

class IndexCityDTO extends Data
{
    public ?string $search;

    public static function fromRequest(IndexCityRequest $request): self
    {
        return self::from([
            'search' => $request->getSearch(),
        ]);
    }
}
