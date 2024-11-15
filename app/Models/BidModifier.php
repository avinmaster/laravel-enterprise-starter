<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Services\BidModifier\DTO\CreateBidModifierDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BidModifier extends Model
{
    use HasUuids;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'advertiser_id',
        'bid_model_id',
        'name',
        'alternative_id',
        'notes',
        'active'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const RELATIONS = [
        'bidModifierTerms',
    ];

    public static function createModel(CreateBidModifierDTO $dto): array
    {
        $id = Str::uuid()->toString();

        return [
            'id' => $id,
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'bid_model_id' => $dto->bid_model_id,
            'name' => $dto->bid_modifier_name,
            'alternative_id' => $dto->alternative_id,
            'notes' => $dto->notes,
            'active' => $dto->active,
        ];
    }

    public function bidModifierTerms(): HasMany
    {
        return $this->hasMany(BidModifierTerm::class);
    }
}
