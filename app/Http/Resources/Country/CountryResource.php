<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'country_code_3' => $this->resource->country_code_3,
            'country_code_2' => $this->resource->country_code_2,
            'name' => $this->resource->name,
        ];
    }
}
