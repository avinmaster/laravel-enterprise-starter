<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browser extends Model
{
    protected $table = 'browsers';

    protected $fillable = [
        'id',
        'key',
        'name',
        'active',
        'category',
    ];

    public $timestamps = false;
}
