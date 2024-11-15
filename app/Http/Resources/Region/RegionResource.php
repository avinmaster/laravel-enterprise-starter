<?php

namespace App\Http\Resources\Region;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'region_code' => $this->resource->region_code,
            'key' => $this->resource->key,
            'country_code_3' => $this->resource->country_code_3,
            'country_code_2' => $this->resource->country_code_2,
            'region_name' => $this->resource->region_name,
        ];
    }
}
