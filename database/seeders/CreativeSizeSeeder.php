<?php

namespace Database\Seeders;

use App\Models\CreativeSize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CreativeSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $creativeSizes = [
            [
                "creative_width" => 88,
                "creative_height" => 31,
                "creative_size_name" => "88x31",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 120,
                "creative_height" => 60,
                "creative_size_name" => "120x60",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 120,
                "creative_height" => 240,
                "creative_size_name" => "120x240",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 120,
                "creative_height" => 600,
                "creative_size_name" => "120x600",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 125,
                "creative_height" => 125,
                "creative_size_name" => "125x125",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 160,
                "creative_height" => 600,
                "creative_size_name" => "160x600",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 180,
                "creative_height" => 150,
                "creative_size_name" => "180x150",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 200,
                "creative_height" => 200,
                "creative_size_name" => "200x200",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 234,
                "creative_height" => 60,
                "creative_size_name" => "234x60",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 250,
                "creative_height" => 250,
                "creative_size_name" => "250x250",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 300,
                "creative_height" => 50,
                "creative_size_name" => "300x50",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 300,
                "creative_height" => 250,
                "creative_size_name" => "300x250",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 300,
                "creative_height" => 600,
                "creative_size_name" => "300x600",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 300,
                "creative_height" => 1050,
                "creative_size_name" => "300x1050",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 320,
                "creative_height" => 50,
                "creative_size_name" => "320x50",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 320,
                "creative_height" => 100,
                "creative_size_name" => "320x100",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 320,
                "creative_height" => 480,
                "creative_size_name" => "320x480",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 336,
                "creative_height" => 280,
                "creative_size_name" => "336x280",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 468,
                "creative_height" => 60,
                "creative_size_name" => "468x60",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 480,
                "creative_height" => 320,
                "creative_size_name" => "480x320",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 728,
                "creative_height" => 90,
                "creative_size_name" => "728x90",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 768,
                "creative_height" => 1024,
                "creative_size_name" => "768x1024",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 970,
                "creative_height" => 90,
                "creative_size_name" => "970x90",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 970,
                "creative_height" => 250,
                "creative_size_name" => "970x250",
                "category" => "common",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "creative_width" => 1024,
                "creative_height" => 768,
                "creative_size_name" => "1024x768",
                "category" => "other",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        $query = CreativeSize::query();
        $query->insert($creativeSizes);
    }
}
