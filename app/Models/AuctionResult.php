<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuctionResult extends Model
{
    protected $table = 'auction_results';

    protected $fillable = [
        'id',
        'ad_id',
        'type',
        'data',
        'created_at',
        'updated_at',
    ];
}
