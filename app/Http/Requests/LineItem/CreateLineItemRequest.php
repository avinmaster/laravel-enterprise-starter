<?php

namespace App\Http\Requests\LineItem;

use App\Enums\LineItem\LineItemBiddingStrategyEnum;
use App\Enums\LineItem\LineItemBiddingPacingEnum;
use App\Enums\LineItem\LineItemBidShadingControlTypeEnum;
use App\Enums\LineItem\LineItemBudgetTypeEnum;
use App\Enums\LineItem\LineItemFrequencyCapsIdTypeEnum;
use App\Enums\LineItem\LineItemGhostBiddingIdTypeEnum;
use App\Enums\LineItem\LineItemRevenueTypeEnum;
use App\Enums\LineItem\LineItemSegmentExtensionTypeEnum;
use App\Enums\LineItem\LineItemSegmentTypeEnum;
use App\Enums\LineItem\LineItemSegmentVendorNameEnum;
use App\Enums\LineItem\LineItemSkadAssignmentLevelEnum;
use App\Enums\LineItem\LineItemTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Enum\Laravel\Rules\EnumRule;

class CreateLineItemRequest extends FormRequest
{
    public const ADVERTISER_ID = 'advertiser_id';
    public const CAMPAIGN_ID = 'campaign_id';
    public const NAME = 'name';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const ACTIVE = 'active';
    public const FAVORITE = 'favorite';
    public const NOTES = 'notes';
    public const CURRENCY = 'currency';
    public const TYPE = 'type';
    public const START_DATE = 'start_date';
    public const END_DATE = 'end_date';
    public const BUDGET_TYPE = 'budget_type';
    public const SPEND_BUDGET_LIFETIME = 'spend_budget_lifetime';
    public const SPEND_BUDGET_DAILY = 'spend_budget_daily';
    public const IMPRESSIONS_BUDGET_LIFETIME = 'impressions_budget_lifetime';
    public const IMPRESSIONS_BUDGET_DAILY = 'impressions_budget_daily';
    public const REVENUE_TYPE = 'revenue_type';
    public const REVENUE_AMOUNT = 'revenue_amount';
    public const BID_MODIFIER_ID = 'bid_modifier_id';
    public const DELIVERY_MODIFIER_ID = 'delivery_modifier_id';
    public const MIN_BID = 'min_bid';
    public const MAX_BID = 'max_bid';
    public const BIDDING_STRATEGY = 'bidding_strategy';
    public const BIDDING_VALUES = 'bidding_values';
    public const BID_SHADING_CONTROL = 'bid_shading_control';
    public const BIDDING_CUSTOM = 'bidding_custom';
    public const BIDDING_PACING = 'bidding_pacing';
    public const FREQUENCY_CAPS_ID_TYPE = 'frequency_caps_id_type';
    public const FREQUENCY_CAPS_USE_FALLBACK = 'frequency_caps_use_fallback';
    public const FREQUENCY_CAPS_LIMITS = 'frequency_caps_limits';
    public const FREQUENCY_CAPS_ID_VENDOR = 'frequency_caps_id_vendor';
    public const FREQUENCY_CAPS_ID_VENDOR_ID = 'frequency_caps_id_vendor_id';
    public const USER_TIMEZONES = 'user_timezones';
    public const SEGMENT_EXTENSION_TYPE = 'segment_extension_type';
    public const SEGMENT_TYPE = 'segment_type';
    public const SEGMENT_VENDORS = 'segment_vendors';
    public const SEGMENT_VENDOR_NAME = 'segment_vendors.*.name';
    public const EVENT_IDS = 'event_ids';
    public const GHOST_BIDDING_ID_TYPE = 'ghost_bidding_id_type';
    public const GHOST_BIDDING_ID_VENDOR = 'ghost_bidding_id_vendor';
    public const GHOST_BIDDING_ID_VENDOR_ID = 'ghost_bidding_id_vendor_id';
    public const BUDGET_CARRY_OVER_TYPE = 'budget_carry_over_type';
    public const ENABLE_SKAD_TRACKING = 'enable_skad_tracking';
    public const SKAD_ASSIGNMENT_LEVEL = 'skad_assignment_level';
    public const TARGET_SKAD = 'target_skad';
    public const GUARANTEED = 'guaranteed';
    public const ACTIVE_FLIGHTS = 'active_flights';

    public function rules(): array
    {
        return [
            self::ADVERTISER_ID => [
                'required',
                'uuid',
            ],
            self::CAMPAIGN_ID => [
                'required',
                'uuid',
            ],
            self::NAME => [
                'required',
                'string',
                'between:1,255',
            ],
            self::ALTERNATIVE_ID => [
                'nullable',
                'string',
                'between:1,255',
            ],
            self::ACTIVE => [
                'nullable',
                'boolean',
            ],
            self::FAVORITE => [
                'nullable',
                'boolean',
            ],
            self::NOTES => [
                'nullable',
                'string',
            ],
            self::CURRENCY => [
                'nullable',
                'string',
            ],
            self::TYPE => [
                'required',
                'integer',
                new EnumRule(LineItemTypeEnum::class),
            ],
            self::START_DATE => [
                'nullable',
                'date',
            ],
            self::END_DATE => [
                'nullable',
                'date',
            ],
            self::BUDGET_TYPE => [
                'nullable',
                'integer',
                new EnumRule(LineItemBudgetTypeEnum::class),
            ],
            self::SPEND_BUDGET_LIFETIME => [
                'nullable',
                'numeric',
                'min:0',
            ],
            self::SPEND_BUDGET_DAILY => [
                'nullable',
                'numeric',
                'min:0',
            ],
            self::IMPRESSIONS_BUDGET_LIFETIME => [
                'nullable',
                'integer',
                'min:0',
            ],
            self::IMPRESSIONS_BUDGET_DAILY => [
                'nullable',
                'integer',
                'min:0',
            ],
            self::REVENUE_TYPE => [
                'nullable',
                'string',
                new EnumRule(LineItemRevenueTypeEnum::class),
            ],
            self::REVENUE_AMOUNT => [
                'nullable',
                'numeric',
            ],
            self::BID_MODIFIER_ID => [
                'nullable',
                'uuid',
            ],
            self::DELIVERY_MODIFIER_ID => [
                'nullable',
                'uuid',
            ],
            self::MIN_BID => [
                'nullable',
                'numeric',
                'min:0',
            ],
            self::MAX_BID => [
                'required_with:' . self::BID_MODIFIER_ID,
                'numeric',
                'min:0',
            ],
            self::BIDDING_STRATEGY => [
                'string',
                new EnumRule(LineItemBiddingStrategyEnum::class)
            ],
            self::BIDDING_VALUES => [
                'array',
            ],
            self::BID_SHADING_CONTROL => [
                'nullable',
                'string',
                new EnumRule(LineItemBidShadingControlTypeEnum::class),
            ],
            self::BIDDING_CUSTOM => [
                'nullable',
                'boolean',
            ],
            self::BIDDING_PACING => [
                'nullable',
                'string',
                new EnumRule(LineItemBiddingPacingEnum::class),
            ],
            self::FREQUENCY_CAPS_ID_TYPE => [
                'nullable',
                'string',
                new EnumRule(LineItemFrequencyCapsIdTypeEnum::class),
            ],
            self::FREQUENCY_CAPS_USE_FALLBACK => [
                'nullable',
                'boolean',
            ],
            self::FREQUENCY_CAPS_LIMITS => [
                'nullable',
                'array',
            ],
            self::FREQUENCY_CAPS_ID_VENDOR => [
                'nullable',
                'string',
            ],
            self::FREQUENCY_CAPS_ID_VENDOR_ID => [
                'nullable',
                'string',
            ],
            self::USER_TIMEZONES => [
                'nullable',
                'array',
            ],
            self::USER_TIMEZONES . '.*' => [
                'nullable',
                'string',
            ],
            self::SEGMENT_EXTENSION_TYPE => [
                'nullable',
                'string',
                new EnumRule(LineItemSegmentExtensionTypeEnum::class),
            ],
            self::SEGMENT_TYPE => [
                'nullable',
                'string',
                new EnumRule(LineItemSegmentTypeEnum::class),
            ],
            self::SEGMENT_VENDORS => [
                'nullable',
                'array',
            ],
            self::SEGMENT_VENDOR_NAME => [
                'nullable',
                'string',
                new EnumRule(LineItemSegmentVendorNameEnum::class),
            ],
            self::EVENT_IDS => [
                'nullable',
                'array',
            ],
            self::GHOST_BIDDING_ID_TYPE => [
                'nullable',
                'string',
                new EnumRule(LineItemGhostBiddingIdTypeEnum::class),
            ],
            self::GHOST_BIDDING_ID_VENDOR => [
                'nullable',
                'string',
            ],
            self::GHOST_BIDDING_ID_VENDOR_ID => [
                'nullable',
                'string',
            ],
            self::BUDGET_CARRY_OVER_TYPE => [
                'nullable',
                'string',
            ],
            self::ENABLE_SKAD_TRACKING => [
                'nullable',
                'boolean',
            ],
            self::SKAD_ASSIGNMENT_LEVEL => [
                'nullable',
                'string',
                new EnumRule(LineItemSkadAssignmentLevelEnum::class),
            ],
            self::TARGET_SKAD => [
                'nullable',
                'boolean',
            ],
            self::GUARANTEED => [
                'nullable',
                'boolean',
            ],
            self::ACTIVE_FLIGHTS => [
                'nullable',
                'array',
            ],
        ];
    }

    public function getUserId(): string
    {
        return $this->user()->id;
    }

    public function getAdvertiserId(): string
    {
        return $this->get(self::ADVERTISER_ID);
    }

    public function getCampaignId(): string
    {
        return $this->get(self::CAMPAIGN_ID);
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getActive(): bool
    {
        return (bool)$this->get(self::ACTIVE);
    }

    public function getFavorite(): ?bool
    {
        return $this->get(self::FAVORITE);
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES);
    }

    public function getCurrency(): ?string
    {
        return $this->get(self::CURRENCY);
    }

    public function getType(): int
    {
        return (int)$this->get(self::TYPE);
    }

    public function getStartDate(): ?string
    {
        return $this->get(self::START_DATE);
    }

    public function getEndDate(): ?string
    {
        return $this->get(self::END_DATE);
    }

    public function getBudgetType(): ?int
    {
        return $this->get(self::BUDGET_TYPE);
    }

    public function getSpendBudgetLifetime(): ?float
    {
        return $this->get(self::SPEND_BUDGET_LIFETIME);
    }

    public function getSpendBudgetDaily(): ?float
    {
        return $this->get(self::SPEND_BUDGET_DAILY);
    }

    public function getImpressionsBudgetLifetime(): ?int
    {
        return $this->get(self::IMPRESSIONS_BUDGET_LIFETIME);
    }

    public function getImpressionsBudgetDaily(): ?int
    {
        return $this->get(self::IMPRESSIONS_BUDGET_DAILY);
    }

    public function getRevenueType(): ?string
    {
        return $this->get(self::REVENUE_TYPE);
    }

    public function getRevenueAmount(): ?float
    {
        return $this->get(self::REVENUE_AMOUNT);
    }

    public function getBidModifierId(): ?string
    {
        return $this->get(self::BID_MODIFIER_ID);
    }

    public function getDeliveryModifierId(): ?string
    {
        return $this->get(self::DELIVERY_MODIFIER_ID);
    }

    public function getMinBid(): ?float
    {
        return $this->get(self::MIN_BID);
    }

    public function getMaxBid(): ?float
    {
        return $this->get(self::MAX_BID);
    }

    public function getBiddingStrategy(): string
    {
        return $this->get(self::BIDDING_STRATEGY);
    }

    public function getBiddingValues(): array
    {
        return $this->get(self::BIDDING_VALUES);
    }

    public function getBidShadingControl(): ?string
    {
        return $this->get(self::BID_SHADING_CONTROL);
    }

    public function getBiddingCustom(): ?bool
    {
        return $this->get(self::BIDDING_CUSTOM);
    }

    public function getBiddingPacing(): ?string
    {
        return $this->get(self::BIDDING_PACING);
    }

    public function getFrequencyCapsIdType(): ?string
    {
        return $this->get(self::FREQUENCY_CAPS_ID_TYPE);
    }

    public function getFrequencyCapsUseFallback(): ?bool
    {
        return $this->get(self::FREQUENCY_CAPS_USE_FALLBACK);
    }

    public function getFrequencyCapsLimits(): ?array
    {
        return $this->get(self::FREQUENCY_CAPS_LIMITS);
    }

    public function getFrequencyCapsIdVendor(): ?string
    {
        return $this->get(self::FREQUENCY_CAPS_ID_VENDOR);
    }

    public function getFrequencyCapsIdVendorId(): ?string
    {
        return $this->get(self::FREQUENCY_CAPS_ID_VENDOR_ID);
    }

    public function getUserTimezones(): ?array
    {
        return $this->get(self::USER_TIMEZONES);
    }

    public function getSegmentExtensionType(): ?string
    {
        return $this->get(self::SEGMENT_EXTENSION_TYPE);
    }

    public function getSegmentType(): ?string
    {
        return $this->get(self::SEGMENT_TYPE);
    }

    public function getSegmentVendors(): ?array
    {
        return $this->get(self::SEGMENT_VENDORS);
    }

    public function getEventIds(): ?array
    {
        return $this->get(self::EVENT_IDS);
    }

    public function getGhostBiddingIdType(): ?string
    {
        return $this->get(self::GHOST_BIDDING_ID_TYPE);
    }

    public function getGhostBiddingIdVendor(): ?string
    {
        return $this->get(self::GHOST_BIDDING_ID_VENDOR);
    }

    public function getGhostBiddingIdVendorId(): ?string
    {
        return $this->get(self::GHOST_BIDDING_ID_VENDOR_ID);
    }

    public function getBudgetCarryOverType(): ?string
    {
        return $this->get(self::BUDGET_CARRY_OVER_TYPE);
    }

    public function getEnableSkadTracking(): ?bool
    {
        return $this->get(self::ENABLE_SKAD_TRACKING);
    }

    public function getSkadAssignmentLevel(): ?string
    {
        return $this->get(self::SKAD_ASSIGNMENT_LEVEL);
    }

    public function getTargetSkad(): ?bool
    {
        return $this->get(self::TARGET_SKAD);
    }

    public function getGuaranteed(): ?bool
    {
        return $this->get(self::GUARANTEED);
    }

    public function getActiveFlights(): ?array
    {
        return $this->get(self::ACTIVE_FLIGHTS);
    }
}