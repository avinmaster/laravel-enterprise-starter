<?php

namespace Database\Seeders;

use App\Constants\CreativeAddon\CreativeAddonConstants;
use App\Models\CreativeAddon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CreativeAddonsSeeder extends Seeder
{
    public function run(): void
    {
        $creativeAddons = [
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Moat Banner Tag',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'IAS Banner Tag',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'AdChoices (small, top-left)',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.03,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'AdChoices (small, top-right)',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.03,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'AdChoices (small, bottom-left)',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.03,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'AdChoices (small, top-right)',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[1],
                'type' => CreativeAddonConstants::TYPES[1],
                'cpm_cost' => 0.03,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'DoubleVerify Banner Tag',
                'content' => '',
                'secure' => true,
                'creative_type' => CreativeAddonConstants::CREATIVE_TYPES[0],
                'type' => CreativeAddonConstants::TYPES[0],
                'cpm_cost' => 0.12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        $query = CreativeAddon::query();

        $query->insert($creativeAddons);
    }
}

