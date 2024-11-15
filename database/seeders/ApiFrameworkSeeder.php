<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ApiFramework;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ApiFrameworkSeeder extends Seeder
{
    public function run(): void
    {
        $apiFrameworks = [
            [
                'id' => Str::uuid()->toString(),
                'key' => 1,
                'name' => 'VPAID 1.0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 2,
                'name' => 'VPAID 2.0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 3,
                'name' => 'MRAID-1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 4,
                'name' => 'ORMMA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 5,
                'name' => 'MRAID-2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 6,
                'name' => 'MRAID-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = ApiFramework::query();
        $query->insert($apiFrameworks);
    }
}
