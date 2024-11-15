<?php

namespace App\Http\Resources\CampaignCreative;

use Illuminate\Http\Resources\Json\JsonResource;

class CampaignCreativeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'campaign_id' => $this->resource->campaign_id,
            'creative_id' => $this->resource->creative_id,
            'weight' => $this->resource->weight,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'active' => $this->resource->active,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
