<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceModel extends Model
{
    protected $table = 'device_models';

    protected $fillable = [
        'id',
        'key',
        'name',
        'active',
        'device_make_key',
    ];

    public $timestamps = false;
}
