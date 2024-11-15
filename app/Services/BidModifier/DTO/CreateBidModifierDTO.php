<?php

namespace App\Services\BidModifier\DTO;

use Spatie\LaravelData\Data;
use App\Http\Requests\BidModifier\CreateBidModifierRequest;

class CreateBidModifierDTO extends Data
{
    public string $user_id;
    public ?string $advertiser_id;
    public ?string $bid_model_id;
    public string $bid_modifier_name;
    public array $bid_modifier_terms;
    public ?string $alternative_id;
    public ?string $notes;
    public ?bool $active;

    public static function fromRequest(CreateBidModifierRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'advertiser_id' => $request->getAdvertiserId(),
            'bid_model_id' => $request->getBidModelId(),
            'bid_modifier_name' => $request->getBidModifierName(),
            'bid_modifier_terms' => $request->getBidModifierTerms(),
            'alternative_id' => $request->getAlternativeId(),
            'notes' => $request->getNotes(),
            'active' => $request->getActive(),
        ]);
    }
}
