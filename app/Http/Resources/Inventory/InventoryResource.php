<?php

namespace App\Http\Resources\Inventory;

use Illuminate\Http\Resources\Json\JsonResource;

class InventoryResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'site_id' => $this->resource->site_id,
            'site_name' => $this->resource->site_name,
            'placement_id' => $this->resource->placement_id,
            'inventory_source_id' => $this->resource->inventory_source_id,
            'volume_ranking' => $this->resource->volume_ranking,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
