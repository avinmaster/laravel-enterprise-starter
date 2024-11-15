<?php

namespace Database\Seeders;

use App\Constants\CreativeTemplate\CreativeTemplateConstants;
use App\Models\CreativeTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CreativeTemplatesSeeder extends Seeder
{
    public function run(): void
    {
        $creativeTemplates = [
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Banner Image',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Banner Flash',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Banner JS Tag',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Banner iFrame Tag',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Banner MRAID Tag',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'HTML5 Creative',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'VAST, Inline',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'VAST, Wrapper',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'VAST Wrapper with MOAT Viewability',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Image App Install',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Video App Install (Inline)',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Image Content',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Video Content (Inline)',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Video App Install (VAST/VPAID Wrapper)',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native Video Content (VAST/VPAID Wrapper)',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Native App Promo Icon',
                'creative_type' => CreativeTemplateConstants::CREATIVE_TYPES[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        $query = CreativeTemplate::query();

        $query->insert($creativeTemplates);
    }
}