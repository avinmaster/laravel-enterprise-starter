<?php

namespace App\Services\Advertiser\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\Advertiser\CreateAdvertiserRequest;

class CreateAdvertiserDTO extends Data
{
    public string $user_id;
    public string $name;
    public string $domain;
    public ?string $app_bundle;
    public ?string $alternative_id;
    public ?string $notes;
    public ?string $default_currency;
    public ?string $default_continent;
    public string $category_id;
    public ?string $default_click_url;
    public ?bool $active;
    public ?string $default_image;
    public ?string $default_campaign_preset;
    public ?string $default_creative_thumbnail_url;
    public ?string $default_line_item_preset;
    public ?string $default_targeting_preset;
    public ?bool $is_comcast_segment_eligible;
    public ?string $skad_mmp;

    public static function fromRequest(CreateAdvertiserRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'name' => $request->getName(),
            'domain' => $request->getDomain(),
            'app_bundle' => $request->getAppBundle(),
            'alternative_id' => $request->getAlternativeId(),
            'notes' => $request->getNotes(),
            'default_currency' => $request->getDefaultCurrency(),
            'default_continent' => $request->getDefaultContinent(),
            'category_id' => $request->getCategoryId(),
            'default_click_url' => $request->getDefaultClickUrl(),
            'active' => $request->getActive(),
            'default_image' => $request->getDefaultImage(),
            'default_campaign_preset' => $request->getDefaultCampaignPreset(),
            'default_creative_thumbnail_url' => $request->getDefaultCreativeThumbnailUrl(),
            'default_line_item_preset' => $request->getDefaultLineItemPreset(),
            'default_targeting_preset' => $request->getDefaultTargetingPreset(),
            'is_comcast_segment_eligible' => $request->getIsComcastSegmentEligible(),
            'skad_mmp' => $request->getSkadMmp(),
        ]);
    }
}
