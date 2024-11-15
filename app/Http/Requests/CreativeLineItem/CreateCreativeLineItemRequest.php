<?php

namespace App\Http\Requests\CreativeLineItem;

use Illuminate\Foundation\Http\FormRequest;

class CreateCreativeLineItemRequest extends FormRequest
{
    public const LINE_ITEM_ID = 'line_item_id';
    public const CREATIVE_ID = 'creative_id';
    public const ACTIVE = 'active';
    public const WEIGHT = 'weight';
    public const START_DATE = 'start_date';
    public const END_DATE = 'end_date';

    public function rules(): array
    {
        return [
            self::LINE_ITEM_ID => [
                'required',
                'uuid',
            ],
            self::CREATIVE_ID => [
                'required',
                'uuid',
            ],
            self::ACTIVE => [
                'boolean',
            ],
            self::WEIGHT => [
                'integer',
                'between:1,100',
            ],
            self::START_DATE => [
                'date',
            ],
            self::END_DATE => [
                'date',
            ],
        ];
    }

    public function getLineItemId(): string
    {
        return $this->route(self::LINE_ITEM_ID);
    }

    public function getCreativeId(): string
    {
        return $this->get(self::CREATIVE_ID);
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE) ?? true;
    }

    public function getWeight(): ?int
    {
        return $this->get(self::WEIGHT);
    }

    public function getStartDate(): ?string
    {
        return $this->get(self::START_DATE);
    }

    public function getEndDate(): ?string
    {
        return $this->get(self::END_DATE);
    }
}
