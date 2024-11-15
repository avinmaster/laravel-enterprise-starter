<?php

namespace App\Http\Requests\CampaignCreative;

use Illuminate\Foundation\Http\FormRequest;

class GetCampaignCreativeRequest extends FormRequest
{
    public const CAMPAIGN_CREATIVE_ID = 'campaign_creative_id';

    public function getId(): string
    {
        return $this->route(self::CAMPAIGN_CREATIVE_ID);
    }
}
