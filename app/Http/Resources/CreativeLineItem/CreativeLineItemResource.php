<?php

namespace App\Http\Resources\CreativeLineItem;

use Illuminate\Http\Resources\Json\JsonResource;

class CreativeLineItemResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'creative_id' => $this->resource->creative_id,
            'line_item_id' => $this->resource->line_item_id,
            'active' => $this->resource->active,
            'weight' => $this->resource->weight,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}