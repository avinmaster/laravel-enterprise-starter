<?php

namespace App\Http\Requests\DeliveryModifier;

use App\Enums\DeliveryModifier\DeliveryModifierTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Enum\Laravel\Rules\EnumRule;

class CreateDeliveryModifierRequest extends FormRequest
{
    public const ADVERTISER_ID = 'advertiser_id';
    public const DELIVERY_MODEL_ID = 'delivery_model_id';
    public const NAME = 'name';
    public const TYPE = 'type';
    public const TERMS = 'terms';
    public const TARGETING = 'terms.*.targeting';
    public const TARGETING_KEY = 'terms.*.targeting.*.key';
    public const TARGETING_VALUE = 'terms.*.targeting.*.value';
    public const TARGETING_COMPARATOR = 'terms.*.targeting.*.comparator';
    public const TARGETING_EXPAND_LIST = 'terms.*.targeting.*.expand_list';
    public const BUDGET_CAP_PERCENTAGE = 'terms.*.budget_cap_percentage';
    public const RANK = 'terms.*.rank';
    public const WEIGHT = 'terms.*.weight';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const NOTES = 'notes';
    public const ACTIVE = 'active';
    public const FALLBACK_WEIGHT = 'fallback_weight';
    public const FALLBACK_BUDGET_CAP_PERCENTAGE = 'fallback_budget_cap_percentage';

    public function rules(): array
    {
        return [
            self::ADVERTISER_ID => [
                'uuid',
                'nullable',
            ],
            self::DELIVERY_MODEL_ID => [
                'string',
                'nullable',
            ],
            self::NAME => [
                'string',
                'required',
            ],
            self::TYPE => [
                'string',
                'required',
                new EnumRule(DeliveryModifierTypeEnum::class),
            ],
            self::TERMS => [
                'array',
                'required_if:' . self::TYPE . ',' . DeliveryModifierTypeEnum::with_terms(),
            ],
            self::TARGETING => [
                'array',
                'required',
            ],
            self::TARGETING_KEY => [
                'string',
                'required',
            ],
            self::TARGETING_VALUE => [
                'string',
                'nullable',
            ],
            self::TARGETING_COMPARATOR => [
                'string',
                'required',
            ],
            self::TARGETING_EXPAND_LIST => [
                'boolean',
            ],
            self::BUDGET_CAP_PERCENTAGE => [
                'integer',
                'nullable',
            ],
            self::RANK => [
                'integer',
                'required',
            ],
            self::WEIGHT => [
                'string',
                'required',
            ],
            self::ALTERNATIVE_ID => [
                'string',
                'nullable',
            ],
            self::NOTES => [
                'string',
                'nullable',
            ],
            self::ACTIVE => [
                'boolean',
                'nullable',
            ],
            self::FALLBACK_WEIGHT => [
                'string',
                'required',
            ],
            self::FALLBACK_BUDGET_CAP_PERCENTAGE => [
                'integer',
                'nullable',
            ],
        ];
    }

    public function getAdvertiserId(): ?string
    {
        return $this->get(self::ADVERTISER_ID);
    }

    public function getDeliveryModelId(): ?string
    {
        return $this->get(self::DELIVERY_MODEL_ID);
    }

    public function getDeliveryModifierName(): string
    {
        return $this->get(self::NAME);
    }

    public function getType(): string
    {
        return $this->get(self::TYPE);
    }

    public function getDeliveryModifierTerms(): array
    {
        return $this->get(self::TERMS);
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

    public function getFallbackWeight(): string
    {
        return $this->get(self::FALLBACK_WEIGHT);
    }

    public function getFallbackBudgetCapPercentage(): ?int
    {
        return $this->get(self::FALLBACK_BUDGET_CAP_PERCENTAGE);
    }
}
