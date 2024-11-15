<?php

namespace App\Http\Resources\BidModifier;

use Illuminate\Http\Resources\Json\JsonResource;

class BidModifierResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'bid_model_id' => $this->resource->bid_model_id,
            'name' => $this->resource->name,
            'alternative_id' => $this->resource->alternative_id,
            'terms' => $this->resource->bidModifierTerms,
            'notes' => $this->resource->notes,
            'active' => $this->resource->active,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
