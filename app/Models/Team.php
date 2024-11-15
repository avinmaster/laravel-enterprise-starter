<?php

namespace App\Models;

use App\Services\Team\DTO\CreateTeamDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * App\Models\Team
 *
 * @property string $id
 * @property string $owner_id
 * @property string $parent_team_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Team extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'owner_id',
        'parent_team_id',
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(createTeamDTO $dto): array
    {
        $id = Str::uuid()->toString();

        return [
            'id'                => $id,
            'owner_id'          => $dto->owner_id,
            'parent_team_id'    => $dto->parent_team_id ?: null,
            'name'              => $dto->name,
        ];
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_teams');
    }

    public function childTeams(): HasMany
    {
        return $this->hasMany(Team::class, 'parent_team_id');
    }

    public function parentTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'parent_team_id');
    }
}
