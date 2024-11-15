<?php

namespace App\Services\Continent\DTO;

use App\Http\Requests\Continent\IndexContinentRequest;
use Spatie\LaravelData\Data;

class IndexContinentDTO extends Data
{
    public array $sorts;

    public static function fromRequest(IndexContinentRequest $request): self
    {
        return self::from([
            'sorts' => $request->getSort(),
        ]);
    }
}
