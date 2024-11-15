<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrowserVersion extends Model
{
    protected $table = 'browsers_versions';

    protected $fillable = [
        'id',
        'key',
        'name',
        'active',
        'browser_key',
    ];

    public $timestamps = false;
}
