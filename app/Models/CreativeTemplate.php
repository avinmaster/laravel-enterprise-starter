<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CreativeTemplate
 *
 * @property string $id
 * @property string $name
 * @property int $creative_type
 * @property bool $is_video
 * @property bool $active
 * @property string $created_at
 * @property string $updated_at
 */
class CreativeTemplate extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'creative_type',
        'is_video',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
