<?php

namespace App\Services\Campaign\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\Campaign\CreateCampaignRequest;

class CreateCampaignDTO extends Data
{
    public string $user_id;
    public string $advertiser_id;
    public string $name;
    public ?string $alternative_id;
    public bool $active;
    public ?bool $favorite;
    public ?string $notes;
    public ?string $currency;
    public ?string $campaign_preset;
    public ?string $default_line_item_preset;
    public ?string $default_targeting_preset;
    public ?bool $custom_event_association;
    public ?string $start_date;
    public ?string $end_date;
    public ?int $budget_type;
    public ?float $spend_budget_lifetime;
    public ?float $spend_budget_daily;
    public ?int $impressions_budget_lifetime;
    public ?int $impressions_budget_daily;
    public ?string $revenue_type;
    public ?float $revenue_amount;
    public ?string $bid_modifier_id;
    public ?string $delivery_modifier_id;
    public ?float $min_bid;
    public ?float $max_bid;
    public ?string $ghost_bidding_id_type;
    public ?string $ghost_bidding_id_vendor;
    public ?string $ghost_bidding_id_vendor_id;
    public ?string $frequency_caps_id_type;
    public ?bool $frequency_caps_use_fallback;
    public ?array $frequency_caps_limits;
    public ?string $frequency_caps_id_vendor;
    public ?string $frequency_caps_id_vendor_id;
    public ?array $continents;
    public ?array $event_ids;
    public ?string $segment_extension_type;
    public ?string $segment_type;
    public ?array $segment_vendors;
    public ?bool $enable_skad_tracking;

    public static function fromRequest(CreateCampaignRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'advertiser_id' => $request->getAdvertiserId(),
            'name' => $request->getName(),
            'alternative_id' => $request->getAlternativeId(),
            'active' => $request->getActive(),
            'favorite' => $request->getFavorite(),
            'notes' => $request->getNotes(),
            'currency' => $request->getCurrency(),
            'campaign_preset' => $request->getCampaignPreset(),
            'default_line_item_preset' => $request->getDefaultLineItemPreset(),
            'default_targeting_preset' => $request->getDefaultTargetingPreset(),
            'custom_event_association' => $request->getCustomEventAssociation(),
            'start_date' => $request->getStartDate(),
            'end_date' => $request->getEndDate(),
            'budget_type' => $request->getBudgetType(),
            'spend_budget_lifetime' => $request->getSpendBudgetLifetime(),
            'spend_budget_daily' => $request->getSpendBudgetDaily(),
            'impressions_budget_lifetime' => $request->getImpressionsBudgetLifetime(),
            'impressions_budget_daily' => $request->getImpressionsBudgetDaily(),
            'revenue_type' => $request->getRevenueType(),
            'revenue_amount' => $request->getRevenueAmount(),
            'bid_modifier_id' => $request->getBidModifierId(),
            'delivery_modifier_id' => $request->getDeliveryModifierId(),
            'min_bid' => $request->getMinBid(),
            'max_bid' => $request->getMaxBid(),
            'ghost_bidding_id_type' => $request->getGhostBiddingIdType(),
            'ghost_bidding_id_vendor' => $request->getGhostBiddingIdVendor(),
            'ghost_bidding_id_vendor_id' => $request->getGhostBiddingIdVendorId(),
            'frequency_caps_id_type' => $request->getFrequencyCapsIdType(),
            'frequency_caps_use_fallback' => $request->getFrequencyCapsUseFallback(),
            'frequency_caps_limits' => $request->getFrequencyCapsLimits(),
            'frequency_caps_id_vendor' => $request->getFrequencyCapsIdVendor(),
            'frequency_caps_id_vendor_id' => $request->getFrequencyCapsIdVendorId(),
            'continents' => $request->getContinents(),
            'event_ids' => $request->getEventIds(),
            'segment_extension_type' => $request->getSegmentExtensionType(),
            'segment_type' => $request->getSegmentType(),
            'segment_vendors' => $request->getSegmentVendors(),
            'enable_skad_tracking' => $request->getEnableSkadTracking(),
        ]);
    }
}
