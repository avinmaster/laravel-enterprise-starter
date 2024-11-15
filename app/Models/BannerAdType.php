<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BannerAdType extends Model
{
    use HasUuids;
    use HasFactory;

    protected $table = 'banner_ad_types';

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
