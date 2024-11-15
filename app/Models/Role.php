<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as RoleModel;

class Role extends RoleModel
{
    use HasUuids;
    use HasFactory;

    public const ROLE_OWNER = 'owner';

    public const ROLES = [
        self::ROLE_OWNER,
    ];

    protected $keyType = 'string';
}
