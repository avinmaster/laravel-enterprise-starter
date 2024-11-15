<?php

namespace App\Http\Resources\LineItemFlight;

use Illuminate\Http\Resources\Json\JsonResource;

class LineItemFlightResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'line_item_id' => $this->resource->line_item_id,
            'name' => $this->resource->name,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'spend_budget' => $this->resource->spend_budget,
            'impressions_budget' => $this->resource->impressions_budget,
        ];
    }
}
