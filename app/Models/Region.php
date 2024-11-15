<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'region_code',
        'key',
        'country_code_3',
        'country_code_2',
        'region_name',
    ];
}
