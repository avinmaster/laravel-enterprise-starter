<?php

namespace Database\Seeders;

use App\Constants\User\UserConstants;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'id' => Str::uuid()->toString(),
                'name' => Role::ROLE_OWNER,
                'guard_name' => 'api',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = Role::query();

        $query->insert($roles);
    }
}
