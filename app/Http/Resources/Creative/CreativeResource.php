<?php

namespace App\Http\Resources\Creative;

use App\Http\Resources\CreativeAddon\CreativeAddonResource;
use App\Http\Resources\CreativeLineItem\CreativeLineItemPivotResource;
use App\Http\Resources\LineItem\LineItemResource;
use App\Http\Resources\Media\MediaResource;
use App\Http\Resources\TechnicalVendor\TechnicalVendorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CreativeResource extends JsonResource
{
    public function toArray($request): array
    {
        $data = [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'name' => $this->resource->name,
            'type' => $this->resource->type,
            'width' => $this->resource->width,
            'height' => $this->resource->height,
            'ad_markup' => $this->resource->ad_markup,
            'sizeless' => $this->resource->sizeless,
            'secure' => $this->resource->secure,
            'click_url' => $this->resource->click_url,
            'native_offer' => $this->resource->native_offer,
            'content_tag' => $this->resource->content_tag,
            'template_id' => $this->resource->template_id,
            'rule_id' => $this->resource->rule_id,
            'rule_key' => $this->resource->rule_key,
            'pixels' => json_decode($this->resource->pixels, true),
            'scripts' => json_decode($this->resource->scripts, true),
            'thumbnail_url' => $this->resource->thumbnail_url,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'alternative_id' => $this->resource->alternative_id,
            'active' => $this->resource->active,
            'primary_asset' => new MediaResource($this->whenLoaded('primaryAsset')),
            'secondary_asset' => new MediaResource($this->whenLoaded('secondaryAsset')),
            'creative_addons' => CreativeAddonResource::collection($this->whenLoaded('creativeAddons')),
            'technical_vendors' => TechnicalVendorResource::collection($this->whenLoaded('technicalVendors')),
            'associated_line_items' => LineItemResource::collection($this->whenLoaded('associatedLineItems')),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];

        if ($this->resource->pivot) {
            $data['pivot'] = new CreativeLineItemPivotResource($this);
        }

        return $data;
    }
}
