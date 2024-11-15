<?php

namespace App\Services\InventorySource\DTO;

use App\Http\Requests\InventorySource\IndexInventorySourceRequest;
use Spatie\LaravelData\Data;

class IndexInventorySourceDTO extends Data
{
    public string|null $name;

    public static function fromRequest(IndexInventorySourceRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
        ]);
    }
}
