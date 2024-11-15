<?php

namespace App\Services\Creative\DTO;

use App\Http\Requests\Creative\CreateCreativeRequest;
use Spatie\LaravelData\Data;

class CreateCreativeDTO extends Data
{
    public string $user_id;
    public string $advertiser_id;
    public string $name;
    public ?int $type;
    public ?int $width;
    public ?int $height;
    public ?string $ad_markup;
    public ?bool $sizeless;
    public bool $secure;
    public ?string $click_url;
    public ?string $primary_asset;
    public ?string $secondary_asset;
    public ?string $native_offer;
    public ?string $content_tag;
    public string $template_id;
    public ?string $rule_id;
    public ?string $rule_key;
    public ?array $pixels;
    public ?array $scripts;
    public ?string $thumbnail_url;
    public ?string $start_date;
    public ?string $end_date;
    public ?string $alternative_id;
    public ?string $notes;
    public ?bool $active;
    public ?array $creative_addons;
    public ?array $technical_vendors;

    public static function fromRequest(CreateCreativeRequest $request): self
    {
        return self::from([
            'user_id' => $request->getUserId(),
            'advertiser_id' => $request->getAdvertiserId(),
            'name' => $request->getName(),
            'sizeless' => $request->getSizeless(),
            'secure' => $request->getSecure(),
            'click_url' => $request->getClickUrl(),
            'primary_asset' => $request->getPrimaryAsset(),
            'secondary_asset' => $request->getSecondaryAsset(),
            'native_offer' => $request->getNativeOffer(),
            'content_tag' => $request->getContentTag(),
            'template_id' => $request->getTemplateId(),
            'rule_id' => $request->getRuleId(),
            'rule_key' => $request->getRuleKey(),
            'pixels' => $request->getPixels(),
            'scripts' => $request->getScripts(),
            'thumbnail_url' => $request->getThumbnailUrl(),
            'start_date' => $request->getStartDate(),
            'end_date' => $request->getEndDate(),
            'alternative_id' => $request->getAlternativeId(),
            'notes' => $request->getNotes(),
            'active' => $request->getActive(),
            'creative_addons' => $request->getCreativeAddons(),
            'technical_vendors' => $request->getTechnicalVendors(),
        ]);
    }
}
