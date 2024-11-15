<?php

namespace App\Http\Requests\Campaign;

use App\Enums\Campaign\CampaignBudgetTypeEnum;
use App\Enums\Campaign\CampaignFrequencyCapsIdTypeEnum;
use App\Enums\Campaign\CampaignGhostBiddingIdTypeEnum;
use App\Models\Campaign;
use Spatie\Enum\Laravel\Rules\EnumRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Enums\Campaign\CampaignRevenueTypeEnum;
use App\Enums\Campaign\CampaignSegmentExtensionTypeEnum;
use App\Enums\Campaign\CampaignSegmentTypeEnum;

class UpdateCampaignRequest extends FormRequest
{
    public const ID = 'id';
    public const USER_ID = 'user_id';
    public const ADVERTISER_ID = 'advertiser_id';
    public const NAME = 'name';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const ACTIVE = 'active';
    public const FAVORITE = 'favorite';
    public const NOTES = 'notes';
    public const CURRENCY = 'currency';
    public const CAMPAIGN_PRESET = 'campaign_preset';
    public const DEFAULT_LINE_ITEM_PRESET = 'default_line_item_preset';
    public const DEFAULT_TARGETING_PRESET = 'default_targeting_preset';
    public const CUSTOM_EVENT_ASSOCIATION = 'custom_event_association';
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
    public const GHOST_BIDDING_ID_TYPE = 'ghost_bidding_id_type';
    public const GHOST_BIDDING_ID_VENDOR = 'ghost_bidding_id_vendor';
    public const GHOST_BIDDING_ID_VENDOR_ID = 'ghost_bidding_id_vendor_id';
    public const FREQUENCY_CAPS_ID_TYPE = 'frequency_caps_id_type';
    public const FREQUENCY_CAPS_USE_FALLBACK = 'frequency_caps_use_fallback';
    public const FREQUENCY_CAPS_LIMITS = 'frequency_caps_limits';
    public const FREQUENCY_CAPS_ID_VENDOR = 'frequency_caps_id_vendor';
    public const FREQUENCY_CAPS_ID_VENDOR_ID = 'frequency_caps_id_vendor_id';
    public const CONTINENTS = 'continents';
    public const EVENT_IDS = 'event_ids';
    public const SEGMENT_EXTENSION_TYPE = 'segment_extension_type';
    public const SEGMENT_TYPE = 'segment_type';
    public const SEGMENT_VENDORS = 'segment_vendors';
    public const ENABLE_SKAD_TRACKING = 'enable_skad_tracking';

    public function authorize(): bool
    {
        $creative_id = $this->getId();

        return $this->user()->can('update', [Campaign::class, $creative_id]);
    }

    public function getId(): string
    {
        return $this->route(self::ID);
    }


    public function rules(): array
    {
        return [
            self::ADVERTISER_ID => [
                'uuid',
                'required'
            ],
            self::NAME => [
                'string',
                'required',
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
                'required',
                'boolean'
            ],
            self::NOTES => [
                'nullable',
                'string'
            ],
            self::CURRENCY => [
                'nullable',
                'string'
            ],
            self::CAMPAIGN_PRESET => [
                'nullable',
                'uuid'
            ],
            self::DEFAULT_LINE_ITEM_PRESET => [
                'nullable',
                'uuid'
            ],
            self::DEFAULT_TARGETING_PRESET => [
                'nullable',
                'uuid'
            ],
            self::CUSTOM_EVENT_ASSOCIATION => [
                'nullable',
                'boolean'
            ],
            self::START_DATE => [
                'required',
                'date'
            ],
            self::END_DATE => [
                'nullable',
                'date'
            ],
            self::BUDGET_TYPE => [
                'nullable',
                'integer',
                new EnumRule(CampaignBudgetTypeEnum::class),
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
                new EnumRule(CampaignRevenueTypeEnum::class),
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
                'nullable',
                'numeric',
                'min:0',
            ],
            self::GHOST_BIDDING_ID_TYPE => [
                'nullable',
                'string',
                new EnumRule(CampaignGhostBiddingIdTypeEnum::class),
            ],
            self::GHOST_BIDDING_ID_VENDOR => [
                'nullable',
                'string',
            ],
            self::GHOST_BIDDING_ID_VENDOR_ID => [
                'nullable',
                'string',
            ],
            self::FREQUENCY_CAPS_ID_TYPE => [
                'nullable',
                'string',
                new EnumRule(CampaignFrequencyCapsIdTypeEnum::class),
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
            self::CONTINENTS => [
                'nullable',
                'array'
            ],
            self::EVENT_IDS => [
                'nullable',
                'array'
            ],
            self::SEGMENT_EXTENSION_TYPE => [
                'nullable',
                'string',
                new EnumRule(CampaignSegmentExtensionTypeEnum::class),
            ],
            self::SEGMENT_TYPE => [
                'nullable',
                'string',
                new EnumRule(CampaignSegmentTypeEnum::class),
            ],
            self::SEGMENT_VENDORS => [
                'nullable',
                'array',
            ],
            self::ENABLE_SKAD_TRACKING => [
                'nullable',
                'boolean'
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

    public function getFavorite(): bool
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

    public function getCampaignPreset(): ?string
    {
        return $this->get(self::CAMPAIGN_PRESET);
    }

    public function getDefaultLineItemPreset(): ?string
    {
        return $this->get(self::DEFAULT_LINE_ITEM_PRESET);
    }

    public function getDefaultTargetingPreset(): ?string
    {
        return $this->get(self::DEFAULT_TARGETING_PRESET);
    }

    public function getCustomEventAssociation(): ?bool
    {
        return $this->get(self::CUSTOM_EVENT_ASSOCIATION);
    }

    public function getStartDate(): string
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

    public function getContinents(): ?array
    {
        return $this->get(self::CONTINENTS);
    }

    public function getEventIds(): ?array
    {
        return $this->get(self::EVENT_IDS);
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

    public function getEnableSkadTracking(): ?bool
    {
        return $this->get(self::ENABLE_SKAD_TRACKING);
    }
}
