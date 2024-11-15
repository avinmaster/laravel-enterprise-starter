<?php

namespace App\Services\CampaignCreative\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\CampaignCreative\CreateCampaignCreativeRequest;

class CreateCampaignCreativeDTO extends Data
{
    public ?bool $active;
    public ?int $weight;
    public string $user_id;
    public ?string $end_date;
    public ?string $start_date;
    public string $campaign_id;
    public string $creative_id;

    public static function fromRequest(CreateCampaignCreativeRequest $request): self
    {
        return self::from([
            'active' => $request->getActive(),
            'weight' => $request->getWeight(),
            'user_id' => $request->user()->id,
            'end_date' => $request->getEndDate(),
            'start_date' => $request->getStartDate(),
            'campaign_id' => $request->getCampaignId(),
            'creative_id' => $request->getCreativeId(),
        ]);
    }
}
