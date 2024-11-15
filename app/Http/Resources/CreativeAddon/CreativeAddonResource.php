<?php

namespace App\Http\Resources\CreativeAddon;

use Illuminate\Http\Resources\Json\JsonResource;

class CreativeAddonResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'advertiser_id' => $this->resource->advertiser_id,
            'include_by_default' => $this->resource->include_by_default,
            'creative_type' => $this->resource->creative_type,
            'type' => $this->resource->type,
            'content' => $this->resource->content,
            'secure' => $this->resource->secure,
            'cpm_cost' => $this->resource->cpm_cost,
            'notes' => $this->resource->notes,
            'active' => $this->resource->active,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
