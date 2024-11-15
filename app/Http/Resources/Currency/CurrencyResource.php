<?php

namespace App\Http\Resources\Currency;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
            'glyph' => $this->resource->glyph,
            'emoji_flag' => $this->resource->emoji_flag,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
