<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Vendor
 *
 * @property string $id
 * @property string $name
 * @property string|null $alternative_id
 * @property bool $active
 * @property bool $global
 * @property string|null $notes
 * @property string|null $fee_type
 * @property float|null $fee_amount
 * @property string $currency
 * @property string $created_at
 * @property string $updated_at
 */
class Vendor extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'alternative_id',
        'active',
        'global',
        'notes',
        'fee_type',
        'fee_amount',
        'currency',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
