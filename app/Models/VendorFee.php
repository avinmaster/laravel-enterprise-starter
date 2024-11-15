<?php

namespace App\Models;

use App\Services\VendorFee\DTO\CreateVendorFeeDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\VendorFee
 *
 * @property string $id
 * @property string $user_id
 * @property string $vendor_id
 * @property string|null $name
 * @property string|null $alternative_id
 * @property bool|null $active
 * @property string|null $notes
 * @property string $object_type
 * @property string $object_id
 * @property string|null $fee_type
 * @property float|null $fee_amount
 * @property string $currency
 * @property string $created_at
 * @property string $updated_at
 */
class VendorFee extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'vendor_id',
        'name',
        'alternative_id',
        'active',
        'notes',
        'object_type',
        'object_id',
        'fee_type',
        'fee_amount',
        'currency',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(createVendorFeeDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'vendor_id' => $dto->vendor_id,
            'name' => $dto->name,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
            'notes' => $dto->notes,
            'object_type' => $dto->object_type,
            'object_id' => $dto->object_id,
            'fee_type' => $dto->fee_type,
            'fee_amount' => $dto->fee_amount,
            'currency' => $dto->currency,
        ];
    }
}
