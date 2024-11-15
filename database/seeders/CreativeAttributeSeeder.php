<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\CreativeAttribute;

class CreativeAttributeSeeder extends Seeder
{
    public function run(): void
    {
        $creativeAttributes = [
            [
                'id' => Str::uuid()->toString(),
                'key' => 1,
                'name' => 'Audio Ad (Auto-Play)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 2,
                'name' => 'Audio Ad (User Initiated)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 3,
                'name' => 'Expandable (Automatic)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 4,
                'name' => 'Expandable (User Initiated - Click)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 5,
                'name' => 'Expandable (User Initiated - Rollover)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 6,
                'name' => 'In-Banner Video Ad (Auto-Play)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 7,
                'name' => 'In-Banner Video Ad (User Initiated)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 8,
                'name' => 'Pop',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 9,
                'name' => 'Provocative or Suggestive Imagery',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 10,
                'name' => 'Shaky, Flashing, Flickering, Extreme Animation, Smileys',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 11,
                'name' => 'Surveys',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 12,
                'name' => 'Text Only',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 13,
                'name' => 'User Interactive',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 14,
                'name' => 'Windows Dialog or Alert Style',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 15,
                'name' => 'Has Audio On/Off Button',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 16,
                'name' => 'Ad Provides Skip Button',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 17,
                'name' => 'Adobe Flash',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = CreativeAttribute::query();
        $query->insert($creativeAttributes);
    }
}
