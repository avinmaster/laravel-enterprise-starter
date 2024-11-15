<?php

namespace App\Services\LineItem\DTO;

use App\Http\Requests\LineItem\CreateLineItemRequest;
use Spatie\LaravelData\Data;

class CreateLineItemDTO extends Data
{
    public string $user_id;
    public string $advertiser_id;
    public string $campaign_id;
    public string $name;
    public ?string $alternative_id;
    public bool $active;
    public ?bool $favorite;
    public ?string $notes;
    public ?string $currency;
    public int $type;
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
    public string $bidding_strategy;
    public array $bidding_values;
    public ?string $bid_shading_control;
    public ?bool $bidding_custom;
    public ?string $bidding_pacing;
    public ?string $frequency_caps_id_type;
    public ?bool $frequency_caps_use_fallback;
    public ?array $frequency_caps_limits;
    public ?string $frequency_caps_id_vendor;
    public ?string $frequency_caps_id_vendor_id;
    public ?array $user_timezones;
    public ?string $segment_extension_type;
    public ?string $segment_type;
    public ?array $segment_vendors;
    public ?array $event_ids;
    public ?string $ghost_bidding_id_type;
    public ?string $ghost_bidding_id_vendor;
    public ?string $ghost_bidding_id_vendor_id;
    public ?string $budget_carry_over_type;
    public ?bool $enable_skad_tracking;
    public ?string $skad_assignment_level;
    public ?bool $target_skad;
    public ?bool $guaranteed;
    public ?array $active_flights;

    public static function fromRequest(CreateLineItemRequest $request): self
    {
        return self::from([
            'user_id' => $request->getUserId(),
            'advertiser_id' => $request->getAdvertiserId(),
            'campaign_id' => $request->getCampaignId(),
            'name' => $request->getName(),
            'alternative_id' => $request->getAlternativeId(),
            'active' => $request->getActive(),
            'favorite' => $request->getFavorite(),
            'notes' => $request->getNotes(),
            'currency' => $request->getCurrency(),
            'type' => $request->getType(),
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
            'bidding_strategy' => $request->getBiddingStrategy(),
            'bidding_values' => $request->getBiddingValues(),
            'bid_shading_control' => $request->getBidShadingControl(),
            'bidding_custom' => $request->getBiddingCustom(),
            'bidding_pacing' => $request->getBiddingPacing(),
            'frequency_caps_id_type' => $request->getFrequencyCapsIdType(),
            'frequency_caps_use_fallback' => $request->getFrequencyCapsUseFallback(),
            'frequency_caps_limits' => $request->getFrequencyCapsLimits(),
            'frequency_caps_id_vendor' => $request->getFrequencyCapsIdVendor(),
            'frequency_caps_id_vendor_id' => $request->getFrequencyCapsIdVendorId(),
            'user_timezones' => $request->getUserTimezones(),
            'segment_type' => $request->getSegmentType(),
            'segment_extension_type' => $request->getSegmentExtensionType(),
            'segment_extension_vendors' => $request->getSegmentVendors(),
            'event_ids' => $request->getEventIds(),
            'ghost_bidding_id_type' => $request->getGhostBiddingIdType(),
            'ghost_bidding_id_vendor' => $request->getGhostBiddingIdVendor(),
            'ghost_bidding_id_vendor_id' => $request->getGhostBiddingIdVendorId(),
            'budget_carry_over_type' => $request->getBudgetCarryOverType(),
            'enable_skad_tracking' => $request->getEnableSkadTracking(),
            'skad_assignment_level' => $request->getSkadAssignmentLevel(),
            'target_skad' => $request->getTargetSkad(),
            'guaranteed' => $request->getGuaranteed(),
            'active_flights' => $request->getActiveFlights(),
        ]);
    }
}