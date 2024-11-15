<?php

namespace App\Models;

use App\Services\TargetingExpression\DTO\CreateTargetingExpressionDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * App\Models\TargetingExpression
 *
 * @property string $id
 * @property string $user_id
 * @property ?string $name
 * @property ?bool $active
 * @property ?string $alternative_id
 * @property ?string $notes
 * @property ?bool $guaranteed
 * @property string $created_at
 * @property string $updated_at
 */
class TargetingExpression extends Model
{
    use HasUuids;
    use SoftDeletes;

    public const RELATIONS = [
        'modules',
    ];

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'active',
        'alternative_id',
        'notes',
        'guaranteed',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(CreateTargetingExpressionDTO $dto): array
    {
        return [
            'id' => Str::uuid()->toString(),
            'user_id' => $dto->user_id,
            'name' => $dto->name,
            'active' => $dto->active,
            'alternative_id' => $dto->alternative_id,
            'notes' => $dto->notes,
            'guaranteed' => $dto->guaranteed,
        ];
    }

    public function modules(): HasMany
    {
        return $this->hasMany(TargetingExpressionModule::class, 'targeting_expression_id');
    }
}
