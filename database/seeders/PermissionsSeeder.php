<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedOwnerPermissions();
    }

    private function seedOwnerPermissions(): void
    {
        $permissions = [
            'send_user_invitation'
        ];

        foreach ($permissions as $permName) {
            Permission::create([
                'name' => $permName,
                'guard_name' => 'api',
            ]);
        }

        $owner = Role::query()->where('name', 'owner')->first();
        $owner->givePermissionTo($permissions);
    }
}
