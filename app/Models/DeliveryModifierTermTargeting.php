<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DeliveryModifierTermTargeting extends Model
{
    use HasUuids;

    protected $table = 'delivery_modifier_term_targeting';

    protected $fillable = [
        'id',
        'key',
        'value',
        'comparator',
        'expand_list',
        'delivery_modifier_id',
        'delivery_modifier_term_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
