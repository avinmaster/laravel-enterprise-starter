<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BidResponse extends Model
{
    use HasUuids;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bid_responses';

    protected $fillable = [
        'data',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
