<?php

namespace App\Http\Resources\BrowserVersion;

use Illuminate\Http\Resources\Json\JsonResource;

class BrowserVersionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'active' => $this->resource->active,
            'browser_key' => $this->resource->browser_key,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
        ];
    }
}
