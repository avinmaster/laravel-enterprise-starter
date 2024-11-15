<?php

namespace App\Http\Requests\CampaignCreative;

use Illuminate\Foundation\Http\FormRequest;

class CreateCampaignCreativeRequest extends FormRequest
{
    public const ACTIVE = 'active';
    public const WEIGHT = 'weight';
    public const END_DATE = 'end_date';
    public const START_DATE = 'start_date';
    public const CAMPAIGN_ID = 'campaign_id';
    public const CREATIVE_ID = 'creative_id';

    public function rules(): array
    {
        return [
            self::ACTIVE => [
                'boolean',
            ],
            self::WEIGHT => [
                'integer',
                'between:1,100',
            ],
            self::END_DATE => [
                'date',
            ],
            self::START_DATE => [
                'date',
            ],
            self::CREATIVE_ID => [
                'required',
                'uuid',
            ],
        ];
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE) ?? true;
    }

    public function getWeight(): ?int
    {
        return $this->get(self::WEIGHT);
    }

    public function getEndDate(): ?string
    {
        return $this->get(self::END_DATE);
    }

    public function getStartDate(): ?string
    {
        return $this->get(self::START_DATE);
    }

    public function getCampaignId(): string
    {
        return $this->route(self::CAMPAIGN_ID);
    }

    public function getCreativeId(): string
    {
        return $this->get(self::CREATIVE_ID);
    }
}
