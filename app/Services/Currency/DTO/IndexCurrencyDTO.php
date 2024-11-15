<?php

namespace App\Services\Currency\DTO;

use App\Http\Requests\Currency\IndexCurrencyRequest;
use Spatie\LaravelData\Data;

class IndexCurrencyDTO extends Data
{
    public array $sorts;

    public static function fromRequest(IndexCurrencyRequest $request): self
    {
        return self::from([
            'sorts' => $request->getSort(),
        ]);
    }
}
