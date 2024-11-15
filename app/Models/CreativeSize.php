<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreativeSize extends Model
{
    protected $fillable = [
        'creative_width',
        'creative_height',
        'creative_size_name',
        'category',
    ];
}
