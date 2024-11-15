<?php

namespace App\Http\Resources\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'attribution' => $this->resource->attribution,
            'event_type' => $this->resource->event_type,
            'segment_id' => $this->resource->segment_id,
            'default_value' => +$this->resource->default_value,
            'click_window_days' => $this->resource->click_window_days,
            'view_window_days' => $this->resource->view_window_days,
            'external_id' => $this->resource->external_id,
            'notes' => $this->resource->notes,
            'active' => $this->resource->active,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
