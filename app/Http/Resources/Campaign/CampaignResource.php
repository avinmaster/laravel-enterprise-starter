<?php

namespace App\Http\Resources\Campaign;

use App\Http\Resources\Metric\MetricResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'name' => $this->resource->name,
            'alternative_id' => $this->resource->alternative_id,
            'active' => $this->resource->active,
            'favorite' => $this->resource->favorite,
            'notes' => $this->resource->notes,
            'currency' => $this->resource->currency,
            'line_items' => $this->resource->lineItems,
            'campaign_preset' => $this->resource->campaign_preset,
            'default_line_item_preset' => $this->resource->default_line_item_preset,
            'default_targeting_preset' => $this->resource->default_targeting_preset,
            'custom_event_association' => $this->resource->custom_event_association,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'budget_type' => $this->resource->budget_type,
            'spend_budget_lifetime' => +$this->resource->spend_budget_lifetime,
            'spend_budget_daily' => +$this->resource->spend_budget_daily,
            'impressions_budget_lifetime' => $this->resource->impressions_budget_lifetime,
            'impressions_budget_daily' => $this->resource->impressions_budget_daily,
            'revenue_type' => $this->resource->revenue_type,
            'revenue_amount' => +$this->resource->revenue_amount,
            'bid_modifier_id' => $this->resource->bid_modifier_id,
            'delivery_modifier_id' => $this->resource->delivery_modifier_id,
            'min_bid' => +$this->resource->min_bid,
            'max_bid' => +$this->resource->max_bid,
            'ghost_bidding_id_type' => $this->resource->ghost_bidding_id_type,
            'ghost_bidding_id_vendor' => $this->resource->ghost_bidding_id_vendor,
            'ghost_bidding_id_vendor_id' => $this->resource->ghost_bidding_id_vendor_id,
            'frequency_caps_id_type' => $this->resource->frequency_caps_id_type,
            'frequency_caps_use_fallback' => $this->resource->frequency_caps_use_fallback,
            'frequency_caps_limits' => json_decode($this->resource->frequency_caps_limits),
            'frequency_caps_id_vendor' => $this->resource->frequency_caps_id_vendor,
            'frequency_caps_id_vendor_id' => $this->resource->frequency_caps_id_vendor_id,
            'continents' => json_decode($this->resource->continents),
            'event_ids' => json_decode($this->resource->event_ids),
            'segment_extension_type' => $this->resource->segment_extension_type,
            'segment_type' => $this->resource->segment_type,
            'segment_vendors' => json_decode($this->resource->segment_vendors),
            'enable_skad_tracking' => $this->resource->enable_skad_tracking,
            'metrics' => new MetricResource($this),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
