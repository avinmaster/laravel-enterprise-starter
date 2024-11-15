<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'key',
        'name',
        'glyph',
        'emoji_flag',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
