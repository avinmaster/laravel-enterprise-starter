<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListModel extends Model
{
    use SoftDeletes;

    protected $table = 'lists';

    protected $fillable = [
        'original_id',
        'name',
        'type',
        'active',
        'alternative_id',
        'notes',
        'attributes',
        'upload_type',
        'delimiter',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
