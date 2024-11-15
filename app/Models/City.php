<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'original_id',
        'name',
        'country_code_2',
        'country_code_3',
        'region_code',
        'region_name',
        'metro_code',
        'geoname',
    ];
}
