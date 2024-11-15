<?php

namespace App\Http\Resources\OperatingSystemVersion;

use Illuminate\Http\Resources\Json\JsonResource;

class OperatingSystemVersionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'operating_system_key' => $this->resource->operating_system_key,
            'active' => $this->resource->active,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
        ];
    }
}
