<?php

namespace App\Http\Resources\CreativeLineItem;

use Illuminate\Http\Resources\Json\JsonResource;

class CreativeLineItemPivotResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "active" => $this->resource->pivot->active,
            "weight" => $this->resource->pivot->weight,
            "start_date" => $this->resource->pivot->start_date,
            "end_date" => $this->resource->pivot->end_date,
            "created_at" => $this->resource->pivot->created_at,
            "updated_at" => $this->resource->pivot->updated_at,
        ];
    }
}
