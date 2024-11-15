<?php

namespace App\Services\Timezone\DTO;

use App\Http\Requests\Timezone\IndexTimezoneRequest;
use Spatie\LaravelData\Data;

class IndexTimezoneDTO extends Data
{
    public string|null $name;

    public static function fromRequest(IndexTimezoneRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
        ]);
    }
}
