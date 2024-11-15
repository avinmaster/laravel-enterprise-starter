<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceMake extends Model
{
    protected $table = 'device_makes';

    protected $fillable = [
        'id',
        'key',
        'name',
        'active',
        'category',
    ];

    public $timestamps = false;
}
