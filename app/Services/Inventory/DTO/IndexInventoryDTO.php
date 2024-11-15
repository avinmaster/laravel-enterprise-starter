<?php

namespace App\Services\Inventory\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\Inventory\IndexInventoryRequest;

class IndexInventoryDTO extends Data
{
    public string|null $placement_id;
    public string|null $site_id;

    public static function fromRequest(IndexInventoryRequest $request): self
    {
        return self::from([
            'placement_id' => $request->getPlacementID(),
            'site_id' => $request->getSiteID(),
        ]);
    }
}
