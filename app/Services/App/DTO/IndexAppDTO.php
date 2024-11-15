<?php

namespace App\Services\App\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\App\IndexAppRequest;

class IndexAppDTO extends Data
{
    public string|null $app_name;

    public static function fromRequest(IndexAppRequest $request): self
    {
        return self::from([
            'app_name' => $request->getAppName(),
        ]);
    }
}
