<?php

namespace App\Http\Resources\Advertiser;

use App\Http\Resources\Campaign\CampaignResource;
use App\Http\Resources\Creative\CreativeResource;
use App\Http\Resources\Media\MediaResource;
use App\Http\Resources\Metric\MetricResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertiserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'name' => $this->resource->name,
            'domain' => $this->resource->domain,
            'app_bundle' => $this->resource->app_bundle,
            'alternative_id' => $this->resource->alternative_id,
            'notes' => $this->resource->notes,
            'default_currency' => $this->resource->default_currency,
            'default_continent' => $this->resource->default_continent,
            'category_id' => $this->resource->category_id,
            'default_click_url' => $this->resource->default_click_url,
            'active' => $this->resource->active,
            'default_campaign_preset' => $this->resource->default_campaign_preset,
            'default_creative_thumbnail_url' => $this->resource->default_creative_thumbnail_url,
            'default_line_item_preset' => $this->resource->default_line_item_preset,
            'default_targeting_preset' => $this->resource->default_targeting_preset,
            'is_comcast_segment_eligible' => $this->resource->is_comcast_segment_eligible,
            'skad_mmp' => $this->resource->skad_mmp,
            'default_image' => new MediaResource($this->whenLoaded('defaultImage')),
            'metrics' => new MetricResource($this),
            'campaigns' => CampaignResource::collection($this->whenLoaded('campaigns')),
            'line_items' => [],
            'creatives' => CreativeResource::collection($this->whenLoaded('creatives')),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
