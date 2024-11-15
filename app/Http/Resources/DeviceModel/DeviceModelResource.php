<?php

namespace App\Http\Resources\DeviceModel;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceModelResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'device_make_key' => $this->resource->device_make_key,
            'active' => $this->resource->active,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
        ];
    }
}
