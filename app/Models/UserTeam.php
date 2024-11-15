<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserTeam
 *
 * @property string $user_id
 * @property string $team_id
 */
class UserTeam extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'team_id',
    ];
}
