<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperatingSystemVersion extends Model
{
    protected $table = 'operating_system_versions';

    protected $fillable = [
        'id',
        'key',
        'name',
        'active',
        'operating_system_key',
    ];

    public $timestamps = false;
}
