<?php

namespace App\Http\Resources\DeliveryModifier;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryModifierResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'delivery_model_id' => $this->resource->delivery_model_id,
            'name' => $this->resource->name,
            'type' => $this->resource->type,
            'alternative_id' => $this->resource->alternative_id,
            'notes' => $this->resource->notes,
            'terms' => $this->resource->deliveryModifierTerms,
            'active' => $this->resource->active,
            'fallback_weight' => $this->resource->fallback_weight,
            'fallback_budget_cap_percentage' => $this->resource->fallback_budget_cap_percentage,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
