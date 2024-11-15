<?php

namespace App\Services\Region\DTO;

use App\Http\Requests\Region\IndexRegionRequest;
use Spatie\LaravelData\Data;

class IndexRegionDTO extends Data
{
    public ?string $search;

    public static function fromRequest(IndexRegionRequest $request): self
    {
        return self::from([
            'search' => $request->getSearch(),
        ]);
    }
}
