<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    public function run(): void
    {
        $directory = base_path('app/SeedData/Cities');
        $files = glob($directory . '/cities-*.php');

        foreach ($files as $file) {
            $cities = include $file;

            foreach ($cities as &$city) {
                $city['original_id'] = $city['id'];
                unset($city['id']);
            }

            $chunks = array_chunk($cities, 500);

            foreach ($chunks as $chunk) {
                City::insert($chunk);
            }
        }
    }
}

