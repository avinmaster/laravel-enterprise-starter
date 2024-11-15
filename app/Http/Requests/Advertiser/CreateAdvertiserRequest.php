<?php

namespace App\Http\Requests\Advertiser;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdvertiserRequest extends FormRequest
{
    public const NAME = 'name';
    public const DOMAIN = 'domain';
    public const APP_BUNDLE = 'app_bundle';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const NOTES = 'notes';
    public const DEFAULT_CURRENCY = 'default_currency';
    public const DEFAULT_CONTINENT = 'default_continent';
    public const CATEGORY_ID = 'category_id';
    public const DEFAULT_CLICK_URL = 'default_click_url';
    public const ACTIVE = 'active';
    public const DEFAULT_IMAGE = 'default_image';
    public const DEFAULT_CAMPAIGN_PRESET = 'default_campaign_preset';
    public const DEFAULT_CREATIVE_THUMBNAIL_URL = 'default_creative_thumbnail_url';
    public const DEFAULT_LINE_ITEM_PRESET = 'default_line_item_preset';
    public const DEFAULT_TARGETING_PRESET = 'default_targeting_preset';
    public const IS_COMCAST_SEGMENT_ELIGIBLE = 'is_comcast_segment_eligible';
    public const SKAD_MMP = 'skad_mmp';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
                'required'
            ],
            self::DOMAIN => [
                'string',
                'required'
            ],
            self::APP_BUNDLE => [
                'string',
                'nullable'
            ],
            self::ALTERNATIVE_ID => [
                'string',
                'nullable'
            ],
            self::NOTES => [
                'string',
                'nullable'
            ],
            self::DEFAULT_CURRENCY => [
                'uuid',
                'required'
            ],
            self::CATEGORY_ID => [
                'uuid',
                'required'
            ],
            self::DEFAULT_CONTINENT => [
                'uuid',
                'required'
            ],
            self::DEFAULT_CLICK_URL => [
                'string',
                'nullable'
            ],
            self::ACTIVE => [
                'boolean',
                'nullable'
            ],
            self::DEFAULT_IMAGE => [
                'uuid',
                'nullable'
            ],
            self::DEFAULT_CAMPAIGN_PRESET => [
                'uuid',
                'nullable'
            ],
            self::DEFAULT_CREATIVE_THUMBNAIL_URL => [
                'string',
                'nullable'
            ],
            self::DEFAULT_LINE_ITEM_PRESET => [
                'uuid',
                'nullable'
            ],
            self::DEFAULT_TARGETING_PRESET => [
                'uuid',
                'nullable'
            ],
            self::IS_COMCAST_SEGMENT_ELIGIBLE => [
                'boolean',
                'nullable'
            ],
            self::SKAD_MMP => [
                'string',
                'nullable'
            ],
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getDomain(): string
    {
        return $this->get(self::DOMAIN);
    }

    public function getAppBundle(): ?string
    {
        return $this->get(self::APP_BUNDLE) ?? null;
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES) ?? null;
    }

    public function getDefaultCurrency(): string
    {
        return $this->get(self::DEFAULT_CURRENCY);
    }

    public function getDefaultContinent(): string
    {
        return $this->get(self::DEFAULT_CONTINENT);
    }

    public function getCategoryId(): string
    {
        return $this->get(self::CATEGORY_ID);
    }

    public function getDefaultClickUrl(): ?string
    {
        return $this->get(self::DEFAULT_CLICK_URL);
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE);
    }

    public function getDefaultImage(): ?string
    {
        return $this->get(self::DEFAULT_IMAGE);
    }

    public function getDefaultCampaignPreset(): ?string
    {
        return $this->get(self::DEFAULT_CAMPAIGN_PRESET);
    }

    public function getDefaultCreativeThumbnailUrl(): ?string
    {
        return $this->get(self::DEFAULT_CREATIVE_THUMBNAIL_URL);
    }

    public function getDefaultLineItemPreset(): ?string
    {
        return $this->get(self::DEFAULT_LINE_ITEM_PRESET);
    }

    public function getDefaultTargetingPreset(): ?string
    {
        return $this->get(self::DEFAULT_TARGETING_PRESET);
    }

    public function getIsComcastSegmentEligible(): ?bool
    {
        return $this->get(self::IS_COMCAST_SEGMENT_ELIGIBLE);
    }

    public function getSkadMmp(): ?string
    {
        return $this->get(self::SKAD_MMP);
    }
}
