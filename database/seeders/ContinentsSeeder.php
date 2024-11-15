<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ContinentsSeeder extends Seeder
{
    public function run(): void
    {
        $continents = [
            [
                'id' => Str::uuid()->toString(),
                'key' => 'APAC',
                'name' => 'Asia Pacific',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 'EMEA',
                'name' => 'Europe',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 'NAM',
                'name' => 'North America',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = Continent::query();

        $query->insert($continents);
    }
}

