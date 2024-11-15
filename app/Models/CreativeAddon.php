<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CreativeAddon
 *
 * @property string $id
 * @property string $name
 * @property string $advertiser_id
 * @property bool $include_by_default
 * @property int $creative_type
 * @property string $type
 * @property string $content
 * @property bool $secure
 * @property double $cpm_cost
 * @property string $notes
 * @property double $active
 * @property string $created_at
 * @property string $updated_at
 */
class CreativeAddon extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'advertiser_id',
        'include_by_default',
        'creative_type',
        'type',
        'content',
        'secure',
        'cpm_cost',
        'notes',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
