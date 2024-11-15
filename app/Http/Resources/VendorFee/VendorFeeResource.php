<?php

namespace App\Http\Resources\VendorFee;

use Illuminate\Http\Resources\Json\JsonResource;

class VendorFeeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'vendor_id' => $this->resource->vendor_id,
            'name' => $this->resource->name,
            'alternative_id' => $this->resource->alternative_id,
            'active' => $this->resource->active,
            'notes' => $this->resource->notes,
            'object_type' => $this->resource->object_type,
            'object_id' => $this->resource->object_id,
            'fee_type' => $this->resource->fee_type,
            'fee_amount' => +$this->resource->fee_amount,
            'currency' => $this->resource->currency,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
