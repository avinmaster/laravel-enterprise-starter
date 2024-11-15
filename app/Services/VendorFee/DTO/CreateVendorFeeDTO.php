<?php

namespace App\Services\VendorFee\DTO;

use App\Http\Requests\VendorFee\CreateVendorFeeRequest;
use Spatie\LaravelData\Data;

class CreateVendorFeeDTO extends Data
{
    public string $user_id;
    public string $vendor_id;
    public ?string $name;
    public ?string $alternative_id;
    public ?bool $active;
    public ?string $notes;
    public string $object_type;
    public string $object_id;
    public ?string $fee_type;
    public ?float $fee_amount;
    public ?string $currency;

    public static function fromRequest(CreateVendorFeeRequest $request): self
    {
        return self::from([
            'user_id' => $request->getUserId(),
            'vendor_id' => $request->getVendorId(),
            'name' => $request->getName(),
            'alternative_id' => $request->getAlternativeId(),
            'active' => $request->getActive(),
            'notes' => $request->getNotes(),
            'object_type' => $request->getObjectType(),
            'object_id' => $request->getObjectId(),
            'fee_type' => $request->getFeeType(),
            'fee_amount' => $request->getFeeAmount(),
            'currency' => $request->getCurrency(),
        ]);
    }
}