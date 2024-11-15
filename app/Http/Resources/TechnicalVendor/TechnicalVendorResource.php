<?php

namespace App\Http\Resources\TechnicalVendor;

use Illuminate\Http\Resources\Json\JsonResource;

class TechnicalVendorResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'creative_vendor_id' => $this->resource->creative_vendor_id,
            'creative_vendor_name' => $this->resource->creative_vendor_name,
            'iab_gdpr_vendor_id' => $this->resource->iab_gdpr_vendor_id,
            'adx_gdpr_provider_id' => $this->resource->adx_gdpr_provider_id,
            'adx_vendor_approval_id' => $this->resource->adx_vendor_approval_id,
        ];
    }
}