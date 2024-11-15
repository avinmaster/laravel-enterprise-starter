<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BidModifierTerm extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'id',
        'value',
        'comparator',
        'multiplier',
        'recency_end',
        'recency_start',
        'targeting_key',
        'bid_modifier_id',
        'override_multiplier',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
