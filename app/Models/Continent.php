<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'key',
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
