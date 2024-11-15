<?php

namespace App\Http\Requests\BidModifier;

use Illuminate\Validation\Rules\Enum;
use Spatie\Enum\Laravel\Rules\EnumRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Enums\BidModifierTerms\TargetingKeysEnum;
use App\Enums\BidModifierTerms\ComparatorTypesEnum;

class CreateBidModifierRequest extends FormRequest
{
    public const NAME = 'name';
    public const NOTES = 'notes';
    public const ACTIVE = 'active';
    public const BID_MODEL_ID = 'bid_model_id';
    public const ADVERTISER_ID = 'advertiser_id';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const BID_MODIFIER_TERMS = 'terms';
    public const RECENCY = 'terms.*.recency';
    public const RECENCY_START = 'terms.*.recency.start';
    public const RECENCY_END = 'terms.*.recency.end';
    public const COMPARATOR = 'terms.*.comparator';
    public const TARGETING_KEY = 'terms.*.targeting_key';
    public const MULTIPLIER = 'terms.*.multiplier';
    public const OVERRIDE_MULTIPLIER = 'terms.*.override_multiplier';
    public const VALUE = 'terms.*.value';

    public function rules(): array
    {
        return [
            self::NOTES => [
                'string',
                'nullable',
            ],
            self::ACTIVE => [
                'boolean',
                'nullable',
            ],
            self::BID_MODEL_ID => [
                'uuid',
                'nullable',
            ],
            self::ADVERTISER_ID => [
                'uuid',
                'nullable',
            ],
            self::ALTERNATIVE_ID => [
                'string',
                'nullable',
            ],
            self::NAME => [
                'string',
                'required',
            ],
            self::BID_MODIFIER_TERMS => [
                'array',
                'required',
            ],
            self::RECENCY => [
                'array',
                'nullable',
            ],
            self::RECENCY_START => [
                'integer',
                'nullable',
            ],
            self::RECENCY_END => [
                'integer',
                'nullable',
            ],
            self::COMPARATOR => [
                'string',
                'required',
                new EnumRule(ComparatorTypesEnum::class),
            ],
            self::MULTIPLIER => [
                'string',
                'required',
            ],
            self::OVERRIDE_MULTIPLIER => [
                'boolean',
                'nullable',
            ],
            self::VALUE => [
                'string',
                'required',
            ],
            self::TARGETING_KEY => [
                'string',
                'required',
                new Enum(TargetingKeysEnum::class),
            ],
        ];
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES);
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE);
    }

    public function getBidModelId(): ?string
    {
        return $this->get(self::BID_MODEL_ID);
    }

    public function getAdvertiserId(): ?string
    {
        return $this->get(self::ADVERTISER_ID);
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getBidModifierName(): string
    {
        return $this->get(self::NAME);
    }

    public function getBidModifierTerms(): array
    {
        return $this->get(self::BID_MODIFIER_TERMS);
    }
}
