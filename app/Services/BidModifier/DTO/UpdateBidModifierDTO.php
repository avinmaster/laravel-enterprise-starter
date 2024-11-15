<?php

namespace App\Services\BidModifier\DTO;

use App\Http\Requests\BidModifier\UpdateBidModifierRequest;
use Spatie\LaravelData\Data;

class UpdateBidModifierDTO extends Data
{
    public string $id;
    public string $user_id;
    public ?string $advertiser_id;
    public ?string $bid_model_id;
    public string $bid_modifier_name;
    public array $bid_modifier_terms;
    public ?string $alternative_id;
    public ?string $notes;
    public ?bool $active;

    public static function fromRequest(UpdateBidModifierRequest $request): self
    {
        return self::from([
            'id' => $request->getId(),
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
