<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Services\DeliveryModifier\DTO\CreateDeliveryModifierDTO;

class DeliveryModifier extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $table = 'delivery_modifiers';

    protected $fillable = [
        'id',
        'user_id',
        'advertiser_id',
        'name',
        'type',
        'alternative_id',
        'delivery_model_id',
        'fallback_weight',
        'notes',
        'active',
        'fallback_budget_cap_percentage',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const RELATIONS = [
        'deliveryModifierTerms.deliveryModifierTermTargetings',
    ];

    public static function createModel(CreateDeliveryModifierDTO $dto): array
    {
        $id = Str::uuid()->toString();

        return [
            'id' => $id,
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            'type' => $dto->type,
            'alternative_id' => $dto->alternative_id,
            'delivery_model_id' => $dto->delivery_model_id,
            'fallback_weight' => $dto->fallback_weight,
            'notes' => $dto->notes,
            'active' => $dto->active,
            'fallback_budget_cap_percentage' => $dto->fallback_budget_cap_percentage,
        ];
    }

    public function deliveryModifierTerms(): HasMany
    {
        return $this->hasMany(DeliveryModifierTerm::class);
    }
}
