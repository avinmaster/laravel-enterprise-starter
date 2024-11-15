<?php

namespace App\Http\Resources\App;

use App\Http\Resources\Campaign\CampaignResource;
use App\Http\Resources\Creative\CreativeResource;
use App\Http\Resources\Media\MediaResource;
use App\Http\Resources\Metric\MetricResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AppResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'app_id' => $this->resource->app_id,
            'app_name' => $this->resource->app_name,
            'app_bundle' => $this->resource->app_bundle,
            'inventory_source_id' => $this->resource->inventory_source_id,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
