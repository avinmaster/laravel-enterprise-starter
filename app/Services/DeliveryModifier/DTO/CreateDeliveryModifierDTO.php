<?php

namespace App\Services\DeliveryModifier\DTO;

use App\Enums\DeliveryModifier\DeliveryModifierTypeEnum;
use Spatie\LaravelData\Data;
use App\Http\Requests\DeliveryModifier\CreateDeliveryModifierRequest;

class CreateDeliveryModifierDTO extends Data
{
    public string $user_id;
    public ?string $advertiser_id;
    public string $name;
    public string $type;
    public ?string $alternative_id;
    public ?string $delivery_model_id;
    public string $fallback_weight;
    public ?array $delivery_modifier_terms;
    public ?int $fallback_budget_cap_percentage;
    public ?string $notes;
    public ?bool $active;

    public static function fromRequest(CreateDeliveryModifierRequest $request): self
    {
        $data = [
            'user_id' => $request->user()->id,
            'advertiser_id' => $request->getAdvertiserId(),
            'name' => $request->getDeliveryModifierName(),
            'type' => $request->getType(),
            'fallback_budget_cap_percentage' => $request->getFallbackBudgetCapPercentage(),
            'alternative_id' => $request->getAlternativeId(),
            'delivery_model_id' => $request->getDeliveryModelId(),
            'fallback_weight' => $request->getFallbackWeight(),
            'notes' => $request->getNotes(),
            'active' => $request->getActive(),
        ];

        if ($request->getType() === DeliveryModifierTypeEnum::with_terms()->value) {
            $data['delivery_modifier_terms'] = $request->getDeliveryModifierTerms();
        }

        return self::from($data);
    }
}
