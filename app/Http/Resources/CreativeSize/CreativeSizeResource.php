<?php

namespace App\Http\Resources\CreativeSize;

use App\Http\Resources\Metric\MetricResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreativeSizeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'creative_width' => $this->resource->creative_width,
            'creative_height' => $this->resource->creative_height,
            'creative_size_name' => $this->resource->creative_size_name,
            'category' => $this->resource->category,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
