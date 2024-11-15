<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * App\Models\LineItemFlight
 *
 * @property string $id
 * @property string $line_item_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property string $spend_budget
 * @property string $impressions_budget
 */
class LineItemFlight extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'line_item_id',
        'name',
        'start_date',
        'end_date',
        'spend_budget',
        'impressions_budget',
    ];
}
