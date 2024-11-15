<?php

namespace App\Services\DataProvider\DTO;

use App\Http\Requests\DataProvider\IndexDataProviderRequest;
use Spatie\LaravelData\Data;

class IndexDataProviderDTO extends Data
{
    public string|null $name;

    public static function fromRequest(IndexDataProviderRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
        ]);
    }
}
