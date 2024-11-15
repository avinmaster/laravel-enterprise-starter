<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\BannerAdType;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class BannerAdTypesSeeder extends Seeder
{
    public function run(): void
    {
        $bannerAdTypes = [
            [
                'id' => Str::uuid()->toString(),
                'key' => 1,
                'name' => 'XHTML Text Ad',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 2,
                'name' => 'XHTML Banner Ad',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 3,
                'name' => 'JavaScript Ad',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'key' => 4,
                'name' => 'iframe',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $query = BannerAdType::query();
        $query->insert($bannerAdTypes);
    }
}
