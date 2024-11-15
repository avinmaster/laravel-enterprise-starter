<?php

namespace App\Http\Resources\Metro;

use Illuminate\Http\Resources\Json\JsonResource;

class MetroResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
        ];
    }
}
