<?php

namespace Database\Factories;

use App\Models\AdPosition;
use App\Models\AdvertiserCategory;
use App\Models\ApiFramework;
use App\Models\Browser;
use App\Models\BrowserVersion;
use App\Models\Carrier;
use App\Models\City;
use App\Models\Country;
use App\Models\DeviceMake;
use App\Models\DeviceModel;
use App\Models\Metro;
use App\Models\OperatingSystemVersion;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdFactory extends Factory
{
    public static int $creativeCounter = 0;
    public static array $adData = [];

    public const CURRENCIES = [
        "USD",
    ];
    public const LINE_ITEM_TYPES = [
        0,
        1,
    ];
    public const CREATIVE_TYPES = [
        0,
        1,
    ];

    public function definition(): array
    {
        if (self::$creativeCounter > 0) {
            $adData = self::$adData;
            self::$creativeCounter--;
        } else {
            $advertisers = $this->generateAdvertisers();
            $advertiserCategories = AdvertiserCategory::all(['key'])->pluck('key')->toArray();

            // Targeting start
            $targeting = [];
            $targetingInclude = [];
            $targetingExclude = [];

            $targeting['cat'] = $this->getRandomContentCategories();
            $targeting['browser'] = $this->getRandomBrowsers();
            $targeting['make'] = $this->getRandomDeviceMakes();
            $targeting['model'] = $this->getRandomDeviceModels();
            $targeting['country'] = $this->getRandomCountries();
            $targeting['metro'] = $this->getRandomMetros();
            $targeting['region'] = $this->getRandomRegions();
            $targeting['city'] = $this->getRandomCities();
            $targeting['pos'] = $this->getRandomAdPositions();
            $targeting['at'] = $this->getRandomAuctionType();
            $targeting['carrier'] = $this->getRandomCarriers();
            $targeting['os_version'] = $this->getRandomOsVersions();
            $targeting['browser_version'] = $this->getRandomBrowserVersions();
            $targeting['api_framework'] = $this->getRandomApiFrameworks();

            foreach ($targeting as $key => $value) {
                if ($value['include']) {
                    $targetingInclude[$key] = $value['include'];
                }
                if ($value['exclude']) {
                    $targetingExclude[$key] = $value['exclude'];
                }
            }
            // Targeting end

            $faker = fake();
            $advertiser = $advertisers[array_rand($advertisers)];
            $type = self::LINE_ITEM_TYPES[array_rand(self::LINE_ITEM_TYPES)];

            $adData = [
                'active' => $faker->boolean(),
                'type' => $type,
                'cpm_bid' => $faker->randomFloat(2, 0.01, 29.99),
                "currency" => self::CURRENCIES[array_rand(self::CURRENCIES)],
                "advertiser" => json_encode([
                    "id" => $advertiser["id"],
                    "domain" => $advertiser["domain"],
                    "category" => $advertiserCategories[array_rand($advertiserCategories)],
                ]),
                "campaign" => json_encode($advertiser["campaigns"][array_rand($advertiser["campaigns"])]),
                "line_item" => json_encode(["id" => Str::uuid()->toString()]),
                "targeting_include" => json_encode($targetingInclude),
                "targeting_exclude" => json_encode($targetingExclude),
            ];

            $numberOfCreatives = mt_rand(1, 5);
            self::$creativeCounter = $numberOfCreatives - 1;

            if (self::$creativeCounter > 0) {
                self::$adData = $adData;
            }
        }

        $adData["id"] = Str::uuid()->toString();

        if ($adData["type"] === self::LINE_ITEM_TYPES[0]) {
            $adData["creative"] = json_encode($this->getRandomBannerCreative());
        } elseif ($adData["type"] === self::LINE_ITEM_TYPES[1]) {
            $adData["creative"] = json_encode($this->getRandomVideoCreative());
        }

        return $adData;
    }

    protected function generateAdvertisers(): array
    {
        return [
            [
                "id" => "9ae6f51c-f941-4276-b8ce-e68f102f2b18",
                "domain" => "https://www.advertiserdomain1.com",
                "campaigns" => [
                    [
                        "id" => "9af0faf6-9fde-4f91-9202-1c5d7723c7c1",
                    ],
                    [
                        "id" => "9af0fb4e-ceba-4a9d-b20a-90952c8a7494",
                    ],
                ],
            ],
            [
                "id" => "ca1e2564-b168-4602-94dd-97f1a90e0dc6",
                "domain" => "https://www.advertiserdomain2.com",
                "campaigns" => [
                    [
                        "id" => "9af10881-8acd-418c-83c7-f3c4c8c95bfb",
                    ],
                    [
                        "id" => "9af10cbd-7c01-40fb-927d-6367288e1022",
                    ],
                ],
            ],
            [
                "id" => "9af4a92d-3af1-42db-af70-b2932d0c8f74",
                "domain" => "https://www.advertiserdomain3.com",
                "campaigns" => [
                    [
                        "id" => "48094161-f551-44b1-899c-db7266cc1699",
                    ],
                    [
                        "id" => "7a5f553c-4717-4a66-be7a-2812314266b1",
                    ],
                ],
            ],
        ];
    }

    protected function generateBannerCreatives(): array
    {
        return [
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 720,
                "height" => 1280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/5083405/pexels-photo-5083405.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 720,
                "height" => 1280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/16614544/pexels-photo-16614544/free-photo-of-cat-sleeping-on-table.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 720,
                "height" => 1280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/6956917/pexels-photo-6956917.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1080,
                "height" => 1920,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17865897/pexels-photo-17865897/free-photo-of-cat.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1080,
                "height" => 1920,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/4963060/pexels-photo-4963060.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1200,
                "height" => 800,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/13766595/pexels-photo-13766595.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1200,
                "height" => 800,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/139764/pexels-photo-139764.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1280,
                "height" => 720,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/1275929/pexels-photo-1275929.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1280,
                "height" => 720,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1280,
                "height" => 720,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/850360/pexels-photo-850360.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1920,
                "height" => 1080,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/19181646/pexels-photo-19181646/free-photo-of-ladybird-drinking-morning-dew-drops.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 1920,
                "height" => 1080,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/4581613/pexels-photo-4581613.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 250,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/14453705/pexels-photo-14453705.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 250,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/18433122/pexels-photo-18433122.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 250,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/14983522/pexels-photo-14983522.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 336,
                "height" => 280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 336,
                "height" => 280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 336,
                "height" => 280,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 100,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 75,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 75,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 75,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 300,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/17357656/pexels-photo-17357656.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/12317451/pexels-photo-12317451.jpeg'></a>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[0],
                "width" => 320,
                "height" => 50,
                "ad_markup" => "<a href='https://www.clickurl.com'><img src='https://images.pexels.com/photos/247376/pexels-photo-247376.jpeg'></a>"
            ],
        ];
    }

    protected function getRandomBannerCreative(): array
    {
        $creatives = $this->generateBannerCreatives();

        return $creatives[array_rand($creatives)];
    }

    protected function generateVideoCreatives(): array
    {
        return [
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:16</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1108640635/preview/stock-footage--time-lapse-the-yellow-sun-going-down-to-the-sea-clouds-moving-above-the-ocean-nature-video-high.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:25</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1099292569/preview/stock-footage-time-lapse-of-sunrise-light-sky-over-sea-landscape-amazing-light-of-nature-cloudscape-sky-and.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:22</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1086820415/preview/stock-footage-beautiful-texture-of-big-power-dark-ocean-waves-with-white-wash-aerial-top-view-footage-of.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:15</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1061068675/preview/stock-footage-rotating-the-leaves-and-stems-hamedoreya-in-the-light-of-the-neon-lights-of-blue-and-red-color.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:46</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1041604891/preview/stock-footage-aerial-idyllic-green-mountains-and-trees-against-sky-during-sunset-scenic-view-of-landscape.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:76</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1090395855/preview/stock-footage-water-caustic-texture-top-view-in-slow-motion-amazing-minute-shot-with-many-different-water.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:13</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1053312533/preview/stock-footage-aerial-shot-expensive-luxury-sport-car-suv-driving-on-the-sunny-clean-road-highway-to-mountains.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:16</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1070160847/preview/stock-footage-electric-car-drive-on-the-wind-turbines-background-car-drives-along-a-mountain-road-electric-car.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:19</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1084922242/preview/stock-footage-close-up-of-details-of-switched-on-led-lights-of-anonymous-prestigious-luxury-modern-car-car.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
            [
                "id" => Str::uuid()->toString(),
                "type" => self::CREATIVE_TYPES[1],
                "width" => 1920,
                "height" => 1080,
                "duration" => 16,
                "ad_markup" => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n" .
                    "<VAST version=\"2.0\">\n" .
                    "<Ad id=\"12345\">\n" .
                    "<InLine>\n" .
                    "<AdSystem version=\"1.0\">SpotXchange</AdSystem>\n" .
                    "<AdTitle>\n<![CDATA[Sample VAST]]>\n</AdTitle>\n" .
                    "<Impression>http://sample.com</Impression>\n" .
                    "<Description>\n<![CDATA[A sample VAST feed]]>\n</Description>\n " .
                    "<Creatives>\n" .
                    "<Creative sequence=\"1\" id=\"1\">\n" .
                    "<Linear>\n" .
                    "<Duration>00:00:13</Duration>\n " .
                    "<TrackingEvents></TrackingEvents>\n" .
                    "<VideoClicks>\n" .
                    "<ClickThrough>\n<![CDATA[https://www.clickurl.com]]>\n</ClickThrough>\n" .
                    "</VideoClicks>\n" .
                    "<MediaFiles>\n" .
                    "<MediaFile delivery=\"progressive\" bitrate=\"256\" width=\"1920\" height=\"1080\" type=\"video/mp4\">\n" .
                    "<![CDATA[https://www.shutterstock.com/shutterstock/videos/1088327201/preview/stock-footage-chiusaforte-italy-rolling-shots-of-two-cars-bmw-m-and-bmw-m-racing-at-high-speed-in.webm]]>\n" .
                    "</MediaFile>\n" .
                    "</MediaFiles>\n" .
                    "</Linear>\n" .
                    "</Creative>\n" .
                    "</Creatives>\n" .
                    "</InLine>\n" .
                    "</Ad>\n" .
                    "</VAST>"
            ],
        ];
    }

    protected function getRandomVideoCreative(): array
    {
        $creatives = $this->generateVideoCreatives();

        return $creatives[array_rand($creatives)];
    }

    protected function getRandomContentCategories(): array
    {
        $contentCategories = AdvertiserCategory::all(['key'])->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($contentCategories);
    }

    protected function getRandomBrowsers(): array
    {
        $browsers = Browser::all(['key'])->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($browsers);
    }

    protected function getRandomDeviceMakes(): array
    {
        $deviceMakes = DeviceMake::all(['key'])->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($deviceMakes);
    }

    protected function getRandomDeviceModels(): array
    {
        $deviceModels = DeviceModel::all(['key'])->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($deviceModels);
    }

    protected function getRandomCountries(): array
    {
        $countries = Country::all(['country_code_3'])->pluck('country_code_3')->toArray();

        return $this->extractIncludeAndExcludeElements($countries);
    }

    protected function getRandomMetros(): array
    {
        $metros = Metro::all(['key'])->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($metros);
    }

    protected function getRandomRegions(): array
    {
        $regions = Region::all(['region_code'])->pluck('region_code')->toArray();

        return $this->extractIncludeAndExcludeElements($regions);
    }

    protected function getRandomCities(): array
    {
        $cities = City::all(['name'])->pluck('name')->toArray();

        return $this->extractIncludeAndExcludeElements($cities);
    }

    protected function getRandomAdPositions(): array
    {
        $adPositions = AdPosition::all()->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($adPositions);
    }

    protected function getRandomAuctionType(): array
    {
        $auctionTypes = [1, 2];

        return $this->extractIncludeAndExcludeElements($auctionTypes);
    }

    protected function getRandomCarriers(): array
    {
        $carriers = Carrier::all()->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($carriers);
    }

    protected function getRandomOsVersions(): array
    {
        $osVersions = OperatingSystemVersion::all()->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($osVersions);
    }

    protected function getRandomBrowserVersions(): array
    {
        $browserVersions = BrowserVersion::all()->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($browserVersions);
    }

    protected function getRandomApiFrameworks(): array
    {
        $apiFrameworks = ApiFramework::all()->pluck('key')->toArray();

        return $this->extractIncludeAndExcludeElements($apiFrameworks);
    }

    protected function extractIncludeAndExcludeElements(array &$data, int $minCount = 0, int $maxCount = 3): array
    {
        $numberOfIncludedElements = 0;
        $numberOfExcludedElements = 0;

        if (mt_rand(0, 10) >= 8) {
            $numberOfIncludedElements = mt_rand($minCount, $maxCount);
        }
        if (mt_rand(0, 10) >= 8) {
            $numberOfExcludedElements = mt_rand($minCount, $maxCount);
        }

        $includedElements = [];
        $excludedElements = [];

        while (count($includedElements) < $numberOfIncludedElements && count($data) > 0) {
            $includedElements[] = $this->extractElement($data);
        }
        while (count($excludedElements) < $numberOfExcludedElements && count($data) > 0) {
            $excludedElements[] = $this->extractElement($data);
        }

        return [
            "include" => $includedElements,
            "exclude" => $excludedElements,
        ];
    }

    protected function extractElement(array &$data) {
        $randomKey = array_rand($data);
        $randomValue = $data[$randomKey];
        unset($data[$randomKey]);

        return $randomValue;
    }
}
