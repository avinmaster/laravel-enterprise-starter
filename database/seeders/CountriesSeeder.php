<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                "country_code_3" => "000",
                "country_code_2" => "00",
                "name" => "Unknown"
            ],
            [
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "name" => "Canada"
            ],
            [
                "country_code_3" => "UMI",
                "country_code_2" => "UM",
                "name" => "United States Minor Outlying Islands"
            ],
            [
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "name" => "United States of America"
            ]
        ];

        $query = Country::query();

        $query->insert($countries);
    }
}

