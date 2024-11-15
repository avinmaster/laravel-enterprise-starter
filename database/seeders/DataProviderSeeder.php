<?php

namespace Database\Seeders;

use App\Models\DataProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DataProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 2,
                "active" => true,
                "account_id" => 76,
                "name" => "BlueKai",
                "buzz_key" => "bluekai",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 3,
                "active" => true,
                "account_id" => 78,
                "name" => "Integral Ad Science",
                "buzz_key" => "ias",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 18,
                "active" => true,
                "account_id" => 262,
                "name" => "Grapeshot/Moat",
                "buzz_key" => "grapeshot",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 20,
                "active" => true,
                "account_id" => 272,
                "name" => "Tru Optik (CTV-Only)",
                "buzz_key" => "truoptik",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 21,
                "active" => true,
                "account_id" => 298,
                "name" => "Liveramp",
                "buzz_key" => "liveramp",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 32,
                "active" => true,
                "account_id" => 472,
                "name" => "Webbula data provider",
                "buzz_key" => "webbula",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 33,
                "active" => true,
                "account_id" => 473,
                "name" => "Alliant",
                "buzz_key" => "alliant",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 34,
                "active" => true,
                "account_id" => 474,
                "name" => "Data Axle",
                "buzz_key" => "dataaxle",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 35,
                "active" => true,
                "account_id" => 479,
                "name" => "Comscore",
                "buzz_key" => "comscore",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ];

        DataProvider::insert($data);
    }
}
