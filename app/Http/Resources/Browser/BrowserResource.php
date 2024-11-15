<?php

namespace App\Http\Resources\Browser;

use Illuminate\Http\Resources\Json\JsonResource;

class BrowserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
            'active' => $this->resource->active,
            'category' => $this->resource->category,
        ];
    }
}
