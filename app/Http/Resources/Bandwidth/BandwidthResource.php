<?php

namespace App\Http\Resources\Bandwidth;

use Illuminate\Http\Resources\Json\JsonResource;

class BandwidthResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
        ];
    }
}
