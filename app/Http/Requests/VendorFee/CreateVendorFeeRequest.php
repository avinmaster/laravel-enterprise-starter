<?php

namespace App\Http\Requests\VendorFee;

use App\Enums\VendorFee\VendorFeeTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Enum\Laravel\Rules\EnumRule;

class CreateVendorFeeRequest extends FormRequest
{
    public const VENDOR_ID = 'vendor_id';
    public const NAME = 'name';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const ACTIVE = 'active';
    public const NOTES = 'notes';
    public const OBJECT_TYPE = 'object_type';
    public const OBJECT_ID = 'object_id';
    public const FEE_TYPE = 'fee_type';
    public const FEE_AMOUNT = 'fee_amount';
    public const CURRENCY = 'currency';

    public function rules(): array
    {
        return [
            self::VENDOR_ID => [
                'required',
                'uuid',
            ],
            self::NAME => [
                'nullable',
                'string',
                'between:1,255',
            ],
            self::ALTERNATIVE_ID => [
                'nullable',
                'string',
                'between:1,255',
            ],
            self::ACTIVE => [
                'nullable',
                'boolean',
            ],
            self::NOTES => [
                'nullable',
                'string',
            ],
            self::OBJECT_TYPE => [
                'required',
                'string',
            ],
            self::OBJECT_ID => [
                'required',
                'uuid',
            ],
            self::FEE_TYPE => [
                'nullable',
                'string',
                new EnumRule(VendorFeeTypeEnum::class),
            ],
            self::FEE_AMOUNT => [
                'nullable',
                'numeric',
                'between:0,99.9',
            ],
            self::CURRENCY => [
                'required',
                'string',
            ],
        ];
    }

    public function getUserId(): string
    {
        return $this->user()->id;
    }

    public function getVendorId(): string
    {
        return $this->get(self::VENDOR_ID);
    }

    public function getName(): ?string
    {
        return $this->get(self::NAME);
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getActive(): bool
    {
        return (bool)$this->get(self::ACTIVE);
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES);
    }

    public function getObjectType(): string
    {
        return $this->get(self::OBJECT_TYPE);
    }

    public function getObjectId(): string
    {
        return $this->get(self::OBJECT_ID);
    }

    public function getFeeType(): ?string
    {
        return $this->get(self::FEE_TYPE);
    }

    public function getFeeAmount(): ?float
    {
        return $this->get(self::FEE_AMOUNT);
    }

    public function getCurrency(): ?string
    {
        return $this->get(self::CURRENCY);
    }
}
