<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Services\CampaignCreative\DTO\CreateCampaignCreativeDTO;

class CampaignCreative extends Pivot
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

    protected $table = 'campaign_creatives';

    protected $fillable = [
        'id',
        'user_id',
        'campaign_id',
        'creative_id',
        'weight',
        'start_date',
        'end_date',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(CreateCampaignCreativeDTO $dto): array
    {
        return [
            'active' => $dto->active,
            'weight' => $dto->weight,
            'user_id' => $dto->user_id,
            'end_date' => $dto->end_date,
            'start_date' => $dto->start_date,
            'creative_id' => $dto->creative_id,
            'campaign_id' => $dto->campaign_id,
        ];
    }
}
