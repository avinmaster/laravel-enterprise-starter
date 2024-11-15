<?php

namespace Database\Seeders;

use App\Models\Browser;
use Illuminate\Database\Seeder;

class BrowserSeeder extends Seeder
{
    public function run(): void
    {
        $browsers = [
            [
                "active" => true,
                "key" => "Chrome",
                "name" => "Chrome",
                "category" => "common",
            ],
            [
                "active" => true,
                "key" => "Firefox",
                "name" => "Firefox",
                "category" => "common",
            ],
            [
                "active" => true,
                "key" => "Internet Explorer",
                "name" => "Internet Explorer",
                "category" => "common",
            ],
            [
                "active" => true,
                "key" => "Opera",
                "name" => "Opera",
                "category" => "common",
            ],
            [
                "active" => true,
                "key" => "Safari",
                "name" => "Safari",
                "category" => "common",
            ],
            [
                "active" => true,
                "key" => "Amazon Silk",
                "name" => "Amazon Silk",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Android Browser",
                "name" => "Android Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "AOL Browser",
                "name" => "AOL Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "BlackBerry Browser",
                "name" => "BlackBerry Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Chrome Mobile",
                "name" => "Chrome Mobile",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Chromium",
                "name" => "Chromium",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Comodo Dragon",
                "name" => "Comodo Dragon",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Firefox Mobile",
                "name" => "Firefox Mobile",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Iceweasel",
                "name" => "Iceweasel",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Internet Explorer Mobile",
                "name" => "Internet Explorer Mobile",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Maxthon",
                "name" => "Maxthon",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Microsoft Edge",
                "name" => "Microsoft Edge",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "MIUI Browser",
                "name" => "MIUI Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "NetFront",
                "name" => "NetFront",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Nokia S60",
                "name" => "Nokia S60",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Obigo",
                "name" => "Obigo",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Opera Mini",
                "name" => "Opera Mini",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Opera Mobile",
                "name" => "Opera Mobile",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Other",
                "name" => "Other Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Puffin",
                "name" => "Puffin",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Samsung Browser",
                "name" => "Samsung Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "SeaMonkey",
                "name" => "SeaMonkey",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "SRWare Iron",
                "name" => "SRWare Iron",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Thunderbird",
                "name" => "Thunderbird",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "UC Browser",
                "name" => "UC Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "-1",
                "name" => "Unknown Browser",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Webkit",
                "name" => "Webkit",
                "category" => null,
            ],
            [
                "active" => true,
                "key" => "Yandex.Browser",
                "name" => "Yandex Browser",
                "category" => null,
            ],
        ];

        $query = Browser::query();

        $query->insert($browsers);
    }
}
