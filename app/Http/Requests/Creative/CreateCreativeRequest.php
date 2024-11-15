<?php

namespace App\Http\Requests\Creative;

use Illuminate\Foundation\Http\FormRequest;

class CreateCreativeRequest extends FormRequest
{
    public const ADVERTISER_ID = 'advertiser_id';
    public const NAME = 'name';
    public const SIZELESS = 'sizeless';
    public const SECURE = 'secure';
    public const CLICK_URL = 'click_url';
    public const PRIMARY_ASSET = 'primary_asset';
    public const SECONDARY_ASSET = 'secondary_asset';
    public const NATIVE_OFFER = 'native_offer';
    public const CONTENT_TAG = 'content_tag';
    public const TEMPLATE_ID = 'template_id';
    public const RULE_ID = 'rule_id';
    public const RULE_KEY = 'rule_key';
    public const PIXELS = 'pixels';
    public const SCRIPTS = 'scripts';
    public const THUMBNAIL_URL = 'thumbnail_url';
    public const START_DATE = 'start_date';
    public const END_DATE = 'end_date';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const NOTES = 'notes';
    public const ACTIVE = 'active';
    public const CREATIVE_ADDONS = 'creative_addons';
    public const TECHNICAL_VENDORS = 'technical_vendors';

    public function rules(): array
    {
        return [
            self::ADVERTISER_ID => [
                'required',
                'uuid',
            ],
            self::NAME => [
                'required',
                'string',
                'between:1,255',
            ],
            self::SIZELESS => [
                'nullable',
                'boolean',
            ],
            self::SECURE => [
                'required',
                'boolean',
            ],
            self::CLICK_URL => [
                'nullable',
                'string',
            ],
            self::PRIMARY_ASSET => [
                'nullable',
                'uuid',
            ],
            self::SECONDARY_ASSET => [
                'nullable',
                'uuid',
            ],
            self::NATIVE_OFFER => [
                'nullable',
                'uuid',
            ],
            self::CONTENT_TAG => [
                'nullable',
                'string',
            ],
            self::TEMPLATE_ID => [
                'required',
                'uuid',
            ],
            self::RULE_ID => [
                'nullable',
                'uuid',
            ],
            self::RULE_KEY => [
                'nullable',
                'string',
            ],
            self::PIXELS => [
                'nullable',
                'array',
            ],
            self::SCRIPTS => [
                'nullable',
                'array',
            ],
            self::THUMBNAIL_URL => [
                'nullable',
                'string',
            ],
            self::START_DATE => [
                'nullable',
                'date',
            ],
            self::END_DATE => [
                'nullable',
                'date',
            ],
            self::ALTERNATIVE_ID => [
                'nullable',
                'string',
                'between:1,255',
            ],
            self::NOTES => [
                'nullable',
                'string',
            ],
            self::ACTIVE => [
                'nullable',
                'boolean',
            ],
            self::CREATIVE_ADDONS => [
                'nullable',
                'array',
            ],
            self::CREATIVE_ADDONS . '.*' => [
                'nullable',
                'uuid',
            ],
            self::TECHNICAL_VENDORS => [
                'nullable',
                'array',
            ],
            self::TECHNICAL_VENDORS . '.*' => [
                'nullable',
                'integer',
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

    public function getSizeless(): ?bool
    {
        return $this->get(self::SIZELESS);
    }

    public function getSecure(): bool
    {
        return $this->get(self::SECURE);
    }

    public function getClickUrl(): ?string
    {
        return $this->get(self::CLICK_URL);
    }

    public function getPrimaryAsset(): ?string
    {
        return $this->get(self::PRIMARY_ASSET);
    }

    public function getSecondaryAsset(): ?string
    {
        return $this->get(self::SECONDARY_ASSET);
    }

    public function getNativeOffer(): ?string
    {
        return $this->get(self::NATIVE_OFFER);
    }

    public function getContentTag(): ?string
    {
        return $this->get(self::CONTENT_TAG);
    }

    public function getTemplateId(): string
    {
        return $this->get(self::TEMPLATE_ID);
    }

    public function getRuleId(): ?string
    {
        return $this->get(self::RULE_ID);
    }

    public function getRuleKey(): ?string
    {
        return $this->get(self::RULE_KEY);
    }

    public function getPixels(): ?array
    {
        return $this->get(self::PIXELS);
    }

    public function getScripts(): ?array
    {
        return $this->get(self::SCRIPTS);
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->get(self::THUMBNAIL_URL);
    }

    public function getStartDate(): ?string
    {
        return $this->get(self::START_DATE);
    }

    public function getEndDate(): ?string
    {
        return $this->get(self::END_DATE);
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES);
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE);
    }

    public function getCreativeAddons(): ?array
    {
        return $this->get(self::CREATIVE_ADDONS);
    }

    public function getTechnicalVendors(): ?array
    {
        return $this->get(self::TECHNICAL_VENDORS);
    }
}
