<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    public function run(): void
    {
        $regions = [
            [
                "region_code" => "00",
                "key" => "000/00",
                "country_code_3" => "000",
                "country_code_2" => "00",
                "region_name" => "Unknown"
            ],
            [
                "region_code" => "AB",
                "key" => "CAN/AB",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Alberta"
            ],
            [
                "region_code" => "BC",
                "key" => "CAN/BC",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "British Columbia"
            ],
            [
                "region_code" => "MB",
                "key" => "CAN/MB",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Manitoba"
            ],
            [
                "region_code" => "NB",
                "key" => "CAN/NB",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "New Brunswick"
            ],
            [
                "region_code" => "NL",
                "key" => "CAN/NL",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Newfoundland and Labrador"
            ],
            [
                "region_code" => "NS",
                "key" => "CAN/NS",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Nova Scotia"
            ],
            [
                "region_code" => "NT",
                "key" => "CAN/NT",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Northwest Territories"
            ],
            [
                "region_code" => "NU",
                "key" => "CAN/NU",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Nunavut"
            ],
            [
                "region_code" => "ON",
                "key" => "CAN/ON",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Ontario"
            ],
            [
                "region_code" => "PE",
                "key" => "CAN/PE",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Prince Edward Island"
            ],
            [
                "region_code" => "QC",
                "key" => "CAN/QC",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Quebec"
            ],
            [
                "region_code" => "SK",
                "key" => "CAN/SK",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Saskatchewan"
            ],
            [
                "region_code" => "YT",
                "key" => "CAN/YT",
                "country_code_3" => "CAN",
                "country_code_2" => "CA",
                "region_name" => "Yukon"
            ],
            [
                "region_code" => "AK",
                "key" => "USA/AK",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Alaska"
            ],
            [
                "region_code" => "AL",
                "key" => "USA/AL",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Alabama"
            ],
            [
                "region_code" => "AR",
                "key" => "USA/AR",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Arkansas"
            ],
            [
                "region_code" => "AZ",
                "key" => "USA/AZ",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Arizona"
            ],
            [
                "region_code" => "CA",
                "key" => "USA/CA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "California"
            ],
            [
                "region_code" => "CO",
                "key" => "USA/CO",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Colorado"
            ],
            [
                "region_code" => "CT",
                "key" => "USA/CT",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Connecticut"
            ],
            [
                "region_code" => "DC",
                "key" => "USA/DC",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "District of Columbia"
            ],
            [
                "region_code" => "DE",
                "key" => "USA/DE",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Delaware"
            ],
            [
                "region_code" => "FL",
                "key" => "USA/FL",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Florida"
            ],
            [
                "region_code" => "GA",
                "key" => "USA/GA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Georgia"
            ],
            [
                "region_code" => "HI",
                "key" => "USA/HI",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Hawaii"
            ],
            [
                "region_code" => "IA",
                "key" => "USA/IA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Iowa"
            ],
            [
                "region_code" => "ID",
                "key" => "USA/ID",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Idaho"
            ],
            [
                "region_code" => "IL",
                "key" => "USA/IL",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Illinois"
            ],
            [
                "region_code" => "IN",
                "key" => "USA/IN",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Indiana"
            ],
            [
                "region_code" => "KS",
                "key" => "USA/KS",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Kansas"
            ],
            [
                "region_code" => "KY",
                "key" => "USA/KY",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Kentucky"
            ],
            [
                "region_code" => "LA",
                "key" => "USA/LA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Louisiana"
            ],
            [
                "region_code" => "MA",
                "key" => "USA/MA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Massachusetts"
            ],
            [
                "region_code" => "MD",
                "key" => "USA/MD",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Maryland"
            ],
            [
                "region_code" => "ME",
                "key" => "USA/ME",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Maine"
            ],
            [
                "region_code" => "MI",
                "key" => "USA/MI",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Michigan"
            ],
            [
                "region_code" => "MN",
                "key" => "USA/MN",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Minnesota"
            ],
            [
                "region_code" => "MO",
                "key" => "USA/MO",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Missouri"
            ],
            [
                "region_code" => "MS",
                "key" => "USA/MS",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Mississippi"
            ],
            [
                "region_code" => "MT",
                "key" => "USA/MT",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Montana"
            ],
            [
                "region_code" => "NC",
                "key" => "USA/NC",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "North Carolina"
            ],
            [
                "region_code" => "ND",
                "key" => "USA/ND",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "North Dakota"
            ],
            [
                "region_code" => "NE",
                "key" => "USA/NE",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Nebraska"
            ],
            [
                "region_code" => "NH",
                "key" => "USA/NH",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "New Hampshire"
            ],
            [
                "region_code" => "NJ",
                "key" => "USA/NJ",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "New Jersey"
            ],
            [
                "region_code" => "NM",
                "key" => "USA/NM",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "New Mexico"
            ],
            [
                "region_code" => "NV",
                "key" => "USA/NV",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Nevada"
            ],
            [
                "region_code" => "NY",
                "key" => "USA/NY",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "New York"
            ],
            [
                "region_code" => "OH",
                "key" => "USA/OH",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Ohio"
            ],
            [
                "region_code" => "OK",
                "key" => "USA/OK",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Oklahoma"
            ],
            [
                "region_code" => "OR",
                "key" => "USA/OR",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Oregon"
            ],
            [
                "region_code" => "PA",
                "key" => "USA/PA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Pennsylvania"
            ],
            [
                "region_code" => "RI",
                "key" => "USA/RI",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Rhode Island"
            ],
            [
                "region_code" => "SC",
                "key" => "USA/SC",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "South Carolina"
            ],
            [
                "region_code" => "SD",
                "key" => "USA/SD",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "South Dakota"
            ],
            [
                "region_code" => "TN",
                "key" => "USA/TN",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Tennessee"
            ],
            [
                "region_code" => "TX",
                "key" => "USA/TX",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Texas"
            ],
            [
                "region_code" => "UT",
                "key" => "USA/UT",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Utah"
            ],
            [
                "region_code" => "VA",
                "key" => "USA/VA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Virginia"
            ],
            [
                "region_code" => "VT",
                "key" => "USA/VT",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Vermont"
            ],
            [
                "region_code" => "WA",
                "key" => "USA/WA",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Washington"
            ],
            [
                "region_code" => "WI",
                "key" => "USA/WI",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Wisconsin"
            ],
            [
                "region_code" => "WV",
                "key" => "USA/WV",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "West Virginia"
            ],
            [
                "region_code" => "WY",
                "key" => "USA/WY",
                "country_code_3" => "USA",
                "country_code_2" => "US",
                "region_name" => "Wyoming"
            ]
        ];

        $query = Region::query();

        $query->insert($regions);
    }
}

