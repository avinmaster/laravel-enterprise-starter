<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DeliveryModifierTerm extends Model
{
    use HasUuids;

    protected $table = 'delivery_modifier_terms';

    protected $fillable = [
        'id',
        'rank',
        'weight',
        'bid_modifier_id',
        'budget_cap_percentage',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function deliveryModifierTermTargetings(): HasMany
    {
        return $this->hasMany(DeliveryModifierTermTargeting::class);
    }
}
