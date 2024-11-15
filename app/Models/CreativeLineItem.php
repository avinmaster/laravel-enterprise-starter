<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Services\CreativeLineItem\DTO\CreateCreativeLineItemDTO;

/**
 * App\Models\CreativeLineItem
 *
 * @property string $id
 * @property string $user_id
 * @property string $creative_id
 * @property string $line_item_id
 * @property int|null $weight
 * @property string|null $start_date
 * @property string|null $end_date
 * @property bool|null $active
 * @property string $created_at
 * @property string $updated_at
 */
class CreativeLineItem extends Pivot
{
    use HasUuids;
    use SoftDeletes;

    public const PIVOT_COLUMNS = [
        'active',
        'weight',
        'start_date',
        'end_date',
        'created_at',
        'updated_at'
    ];

    protected $table = 'creative_line_items';

    protected $fillable = [
        'id',
        'user_id',
        'creative_id',
        'line_item_id',
        'weight',
        'start_date',
        'end_date',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(CreateCreativeLineItemDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'creative_id' => $dto->creative_id,
            'line_item_id' => $dto->line_item_id,
            'active' => $dto->active,
            'weight' => $dto->weight,
            'start_date' => $dto->start_date,
            'end_date' => $dto->end_date,
        ];
    }
}
