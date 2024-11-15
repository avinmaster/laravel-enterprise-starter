<?php

namespace App\Models;

use App\Services\Events\DTO\CreateEventDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'advertiser_id',
        'attribution',
        'event_type',
        'segment_id',
        'default_value',
        'click_window_days',
        'view_window_days',
        'external_id',
        'notes',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(CreateEventDTO $dto): array
    {
        return [
            'name' => $dto->name,
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'attribution' => $dto->attribution,
            'event_type' => $dto->event_type,
            'segment_id' => $dto->segment_id,
            'default_value' => $dto->default_value,
            'click_window_days' => $dto->click_window_days,
            'view_window_days' => $dto->view_window_days,
            'external_id' => $dto->external_id,
            'notes' => $dto->notes,
            'active' => $dto->active
        ];
    }
}
