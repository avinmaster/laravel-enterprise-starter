<?php

namespace App\Http\Resources\City;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'country_code_2' => $this->resource->country_code_2,
            'country_code_3' => $this->resource->country_code_3,
            'region_code' => $this->resource->region_code,
            'region_name' => $this->resource->region_name,
            'metro_code' => $this->resource->metro_code,
            'geoname' => $this->resource->geoname,
        ];
    }
}
