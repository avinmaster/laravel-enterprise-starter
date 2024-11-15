<?php

namespace Database\Seeders;

use App\Models\Bandwidth;
use Illuminate\Database\Seeder;

class BandwidthsSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'WIFI',
            'Unknown',
            'Ethernet',
            'Cellular Network – 2G',
            'Cellular Network – 3G',
            'Cellular Network – 4G',
            'Cellular Network – Unknown Generation',
        ];

        foreach ($names as $name) {
            Bandwidth::factory()->create([
                'name' => $name
            ]);
        }
    }
}
