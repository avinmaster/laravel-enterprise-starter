<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TargetingExpressionModule
 *
 * @property string $id
 * @property string $targeting_expression_id
 * @property string $module
 * @property string $key
 * @property string $operator
 * @property string $comparator
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 */
class TargetingExpressionModule extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'targeting_expression_id',
        'module',
        'key',
        'operator',
        'comparator',
        'value',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
