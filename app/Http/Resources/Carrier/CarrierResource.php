<?php

namespace App\Http\Resources\Carrier;

use Illuminate\Http\Resources\Json\JsonResource;

class CarrierResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'active' => $this->resource->active,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
            'category' => $this->resource->category,
        ];
    }
}
