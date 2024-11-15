<?php

namespace App\Http\Resources\Vendor;

use Illuminate\Http\Resources\Json\JsonResource;

class VendorResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'alternative_id' => $this->resource->alternative_id,
            'active' => $this->resource->active,
            'global' => $this->resource->global,
            'notes' => $this->resource->notes,
            'fee_type' => $this->resource->fee_type,
            'fee_amount' => $this->resource->fee_amount,
            'currency' => $this->resource->currency,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}