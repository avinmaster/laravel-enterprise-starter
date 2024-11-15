<?php

namespace Database\Seeders;

use App\Models\AdPosition;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class AdPositionsSeeder extends Seeder
{
    public function run(): void
    {
        $adPositions = [
            [
                'id' => Str::uuid()->toString(),
                'key' => 0,
                'name' => 'Unknown',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 1,
                'name' => 'Above the Fold',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 2,
                'name' => 'Deprecated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 3,
                'name' => 'Below the Fold',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 4,
                'name' => 'Header',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 5,
                'name' => 'Footer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 6,
                'name' => 'Sidebar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 7,
                'name' => 'Full Screen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = AdPosition::query();
        $query->insert($adPositions);
    }
}
