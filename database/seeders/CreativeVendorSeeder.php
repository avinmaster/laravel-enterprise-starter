<?php

namespace Database\Seeders;

use App\Models\TechnicalVendor;
use Illuminate\Database\Seeder;

class CreativeVendorSeeder extends Seeder
{
    public function run(): void
    {
        $vendors = [
            [
                "creative_vendor_id" => 1,
                "creative_vendor_name" => "Videostrip Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 466
            ],
            [
                "creative_vendor_id" => 2,
                "creative_vendor_name" => "comScore vCE - Ad Swapping",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 476
            ],
            [
                "creative_vendor_id" => 3,
                "creative_vendor_name" => "Mixpo - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 617
            ],
            [
                "creative_vendor_id" => 4,
                "creative_vendor_name" => "Jivox - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 834
            ],
            [
                "creative_vendor_id" => 5,
                "creative_vendor_name" => "A9.com, Amazon Europe Core SARL",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 7,
                "adx_vendor_approval_id" => 544
            ],
            [
                "creative_vendor_id" => 6,
                "creative_vendor_name" => "Adloox",
                "iab_gdpr_vendor_id" => 93,
                "adx_gdpr_provider_id" => 35,
                "adx_vendor_approval_id" => 334
            ],
            [
                "creative_vendor_id" => 7,
                "creative_vendor_name" => "Xandr",
                "iab_gdpr_vendor_id" => 32,
                "adx_gdpr_provider_id" => 80,
                "adx_vendor_approval_id" => 394
            ],
            [
                "creative_vendor_id" => 8,
                "creative_vendor_name" => "Aunica",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 93,
                "adx_vendor_approval_id" => 128
            ],
            [
                "creative_vendor_id" => 9,
                "creative_vendor_name" => "DoubleVerify",
                "iab_gdpr_vendor_id" => 126,
                "adx_gdpr_provider_id" => 178,
                "adx_vendor_approval_id" => 145
            ],
            [
                "creative_vendor_id" => 10,
                "creative_vendor_name" => "Flashtalking",
                "iab_gdpr_vendor_id" => 78,
                "adx_gdpr_provider_id" => 209,
                "adx_vendor_approval_id" => 316
            ],
            [
                "creative_vendor_id" => 12,
                "creative_vendor_name" => "Jivox",
                "iab_gdpr_vendor_id" => 294,
                "adx_gdpr_provider_id" => 274,
                "adx_vendor_approval_id" => 457
            ],
            [
                "creative_vendor_id" => 13,
                "creative_vendor_name" => "Linkstorm",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 291,
                "adx_vendor_approval_id" => 554
            ],
            [
                "creative_vendor_id" => 14,
                "creative_vendor_name" => "MediaMath",
                "iab_gdpr_vendor_id" => 79,
                "adx_gdpr_provider_id" => 313,
                "adx_vendor_approval_id" => 526
            ],
            [
                "creative_vendor_id" => 15,
                "creative_vendor_name" => "Sizmek",
                "iab_gdpr_vendor_id" => 68,
                "adx_gdpr_provider_id" => 314,
                "adx_vendor_approval_id" => 228
            ],
            [
                "creative_vendor_id" => 16,
                "creative_vendor_name" => "Conversant/CJ Affiliate",
                "iab_gdpr_vendor_id" => 24,
                "adx_gdpr_provider_id" => 316,
                "adx_vendor_approval_id" => 428
            ],
            [
                "creative_vendor_id" => 17,
                "creative_vendor_name" => "Mixpo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 327,
                "adx_vendor_approval_id" => 447
            ],
            [
                "creative_vendor_id" => 18,
                "creative_vendor_name" => "Ignition One",
                "iab_gdpr_vendor_id" => 245,
                "adx_gdpr_provider_id" => 338,
                "adx_vendor_approval_id" => 195
            ],
            [
                "creative_vendor_id" => 19,
                "creative_vendor_name" => "Nielsen",
                "iab_gdpr_vendor_id" => 373,
                "adx_gdpr_provider_id" => 348,
                "adx_vendor_approval_id" => 69
            ],
            [
                "creative_vendor_id" => 20,
                "creative_vendor_name" => "OpenX Technologies",
                "iab_gdpr_vendor_id" => 69,
                "adx_gdpr_provider_id" => 363,
                "adx_vendor_approval_id" => 461
            ],
            [
                "creative_vendor_id" => 21,
                "creative_vendor_name" => "Quantcast",
                "iab_gdpr_vendor_id" => 11,
                "adx_gdpr_provider_id" => 398,
                "adx_vendor_approval_id" => 152
            ],
            [
                "creative_vendor_id" => 22,
                "creative_vendor_name" => "Sociomantic",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 448,
                "adx_vendor_approval_id" => 806
            ],
            [
                "creative_vendor_id" => 23,
                "creative_vendor_name" => "SpotX",
                "iab_gdpr_vendor_id" => 165,
                "adx_gdpr_provider_id" => 459,
                "adx_vendor_approval_id" => 463
            ],
            [
                "creative_vendor_id" => 24,
                "creative_vendor_name" => "The Trade Desk",
                "iab_gdpr_vendor_id" => 21,
                "adx_gdpr_provider_id" => 479,
                "adx_vendor_approval_id" => 464
            ],
            [
                "creative_vendor_id" => 25,
                "creative_vendor_name" => "Videology",
                "iab_gdpr_vendor_id" => 309,
                "adx_gdpr_provider_id" => 482,
                "adx_vendor_approval_id" => 790
            ],
            [
                "creative_vendor_id" => 26,
                "creative_vendor_name" => "Undertone",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 505,
                "adx_vendor_approval_id" => 535
            ],
            [
                "creative_vendor_id" => 27,
                "creative_vendor_name" => "Weborama",
                "iab_gdpr_vendor_id" => 284,
                "adx_gdpr_provider_id" => 528,
                "adx_vendor_approval_id" => 518
            ],
            [
                "creative_vendor_id" => 28,
                "creative_vendor_name" => "Innovid",
                "iab_gdpr_vendor_id" => 452,
                "adx_gdpr_provider_id" => 588,
                "adx_vendor_approval_id" => 446
            ],
            [
                "creative_vendor_id" => 29,
                "creative_vendor_name" => "RevenueMantra",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 737,
                "adx_vendor_approval_id" => 607
            ],
            [
                "creative_vendor_id" => 30,
                "creative_vendor_name" => "AdMaxim",
                "iab_gdpr_vendor_id" => 9,
                "adx_gdpr_provider_id" => 827,
                "adx_vendor_approval_id" => 451
            ],
            [
                "creative_vendor_id" => 31,
                "creative_vendor_name" => "Batch Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 864,
                "adx_vendor_approval_id" => 414
            ],
            [
                "creative_vendor_id" => 32,
                "creative_vendor_name" => "Vodafone GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 981,
                "adx_vendor_approval_id" => 755
            ],
            [
                "creative_vendor_id" => 33,
                "creative_vendor_name" => "Neustar",
                "iab_gdpr_vendor_id" => 468,
                "adx_gdpr_provider_id" => 1047,
                "adx_vendor_approval_id" => 472
            ],
            [
                "creative_vendor_id" => 34,
                "creative_vendor_name" => "Cloud Technologies",
                "iab_gdpr_vendor_id" => 243,
                "adx_gdpr_provider_id" => 1669,
                "adx_vendor_approval_id" => 885
            ],
            [
                "creative_vendor_id" => 35,
                "creative_vendor_name" => "Gruvi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1745,
                "adx_vendor_approval_id" => 606
            ],
            [
                "creative_vendor_id" => 36,
                "creative_vendor_name" => "Beeswax",
                "iab_gdpr_vendor_id" => 12,
                "adx_gdpr_provider_id" => 1858,
                "adx_vendor_approval_id" => 632
            ],
            [
                "creative_vendor_id" => 37,
                "creative_vendor_name" => "SFR",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1870,
                "adx_vendor_approval_id" => 767
            ],
            [
                "creative_vendor_id" => 38,
                "creative_vendor_name" => "RevJet",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1902,
                "adx_vendor_approval_id" => 838
            ],
            [
                "creative_vendor_id" => 39,
                "creative_vendor_name" => "Protected Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2127,
                "adx_vendor_approval_id" => 813
            ],
            [
                "creative_vendor_id" => 40,
                "creative_vendor_name" => "Cint",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2310,
                "adx_vendor_approval_id" => 874
            ],
            [
                "creative_vendor_id" => 41,
                "creative_vendor_name" => "revenue cloud",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 489
            ],
            [
                "creative_vendor_id" => 42,
                "creative_vendor_name" => "Reddion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 237
            ],
            [
                "creative_vendor_id" => 44,
                "creative_vendor_name" => "BrightRoll",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 43
            ],
            [
                "creative_vendor_id" => 45,
                "creative_vendor_name" => "Efficient Frontier",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 56
            ],
            [
                "creative_vendor_id" => 46,
                "creative_vendor_name" => "InsightExpress",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 60
            ],
            [
                "creative_vendor_id" => 47,
                "creative_vendor_name" => "Nielsen OBE (Vizu) - Survey",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 94
            ],
            [
                "creative_vendor_id" => 48,
                "creative_vendor_name" => "DoubleClick Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 97
            ],
            [
                "creative_vendor_id" => 49,
                "creative_vendor_name" => "PointRoll Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 100
            ],
            [
                "creative_vendor_id" => 50,
                "creative_vendor_name" => "EyeWonder Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 101
            ],
            [
                "creative_vendor_id" => 51,
                "creative_vendor_name" => "AdShuffle",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 126
            ],
            [
                "creative_vendor_id" => 52,
                "creative_vendor_name" => "Broadband Enterprises",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 130
            ],
            [
                "creative_vendor_id" => 53,
                "creative_vendor_name" => "Adlens",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 132
            ],
            [
                "creative_vendor_id" => 54,
                "creative_vendor_name" => "Campaign Monitor (Integral Ad Science)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 144
            ],
            [
                "creative_vendor_id" => 55,
                "creative_vendor_name" => "Adroit Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 174
            ],
            [
                "creative_vendor_id" => 56,
                "creative_vendor_name" => "comScore - vCE",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 182
            ],
            [
                "creative_vendor_id" => 57,
                "creative_vendor_name" => "Pulpo Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 204
            ],
            [
                "creative_vendor_id" => 58,
                "creative_vendor_name" => "TubeMogul Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 220
            ],
            [
                "creative_vendor_id" => 59,
                "creative_vendor_name" => "DoubleClick Rich Media Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 226
            ],
            [
                "creative_vendor_id" => 60,
                "creative_vendor_name" => "EyeWonder - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 227
            ],
            [
                "creative_vendor_id" => 61,
                "creative_vendor_name" => "PointRoll Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 229
            ],
            [
                "creative_vendor_id" => 62,
                "creative_vendor_name" => "Unicast - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 230
            ],
            [
                "creative_vendor_id" => 63,
                "creative_vendor_name" => "Dimestore",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 231
            ],
            [
                "creative_vendor_id" => 64,
                "creative_vendor_name" => "comScore - CE",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 232
            ],
            [
                "creative_vendor_id" => 65,
                "creative_vendor_name" => "Media Innovation Group (Xaxis)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 233
            ],
            [
                "creative_vendor_id" => 66,
                "creative_vendor_name" => "Aggregate Knowledge",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 238
            ],
            [
                "creative_vendor_id" => 67,
                "creative_vendor_name" => "Alenty",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 260
            ],
            [
                "creative_vendor_id" => 68,
                "creative_vendor_name" => "Millward Brown Digital - Survey",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 303
            ],
            [
                "creative_vendor_id" => 69,
                "creative_vendor_name" => "MaxPoint Interactive Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 307
            ],
            [
                "creative_vendor_id" => 70,
                "creative_vendor_name" => "Turn Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 308
            ],
            [
                "creative_vendor_id" => 71,
                "creative_vendor_name" => "AdoTube Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 310
            ],
            [
                "creative_vendor_id" => 72,
                "creative_vendor_name" => "Adconion Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 311
            ],
            [
                "creative_vendor_id" => 73,
                "creative_vendor_name" => "BrightRoll Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 312
            ],
            [
                "creative_vendor_id" => 74,
                "creative_vendor_name" => "LiveRail",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 313
            ],
            [
                "creative_vendor_id" => 75,
                "creative_vendor_name" => "Yume Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 317
            ],
            [
                "creative_vendor_id" => 76,
                "creative_vendor_name" => "Vindico Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 318
            ],
            [
                "creative_vendor_id" => 77,
                "creative_vendor_name" => "AdGear Video Unit",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 322
            ],
            [
                "creative_vendor_id" => 78,
                "creative_vendor_name" => "Adtech Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 328
            ],
            [
                "creative_vendor_id" => 79,
                "creative_vendor_name" => "Pipewave",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 329
            ],
            [
                "creative_vendor_id" => 80,
                "creative_vendor_name" => "Audience Manager(DemDex)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 332
            ],
            [
                "creative_vendor_id" => 81,
                "creative_vendor_name" => "SundaySky Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 337
            ],
            [
                "creative_vendor_id" => 82,
                "creative_vendor_name" => "Adnologies",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 395
            ],
            [
                "creative_vendor_id" => 83,
                "creative_vendor_name" => "Media6Degrees Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 399
            ],
            [
                "creative_vendor_id" => 84,
                "creative_vendor_name" => "Adrime Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 407
            ],
            [
                "creative_vendor_id" => 85,
                "creative_vendor_name" => "Adform DSP Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 408
            ],
            [
                "creative_vendor_id" => 86,
                "creative_vendor_name" => "Adform Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 409
            ],
            [
                "creative_vendor_id" => 87,
                "creative_vendor_name" => "Mediamind/Sizmek Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 410
            ],
            [
                "creative_vendor_id" => 88,
                "creative_vendor_name" => "RadiumOne Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 431
            ],
            [
                "creative_vendor_id" => 89,
                "creative_vendor_name" => "Hubrus",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 441
            ],
            [
                "creative_vendor_id" => 90,
                "creative_vendor_name" => "Telemetry Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 443
            ],
            [
                "creative_vendor_id" => 91,
                "creative_vendor_name" => "Adfox Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 450
            ],
            [
                "creative_vendor_id" => 92,
                "creative_vendor_name" => "Collective Media Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 452
            ],
            [
                "creative_vendor_id" => 93,
                "creative_vendor_name" => "EyeView Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 453
            ],
            [
                "creative_vendor_id" => 94,
                "creative_vendor_name" => "Flashtalking Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 454
            ],
            [
                "creative_vendor_id" => 95,
                "creative_vendor_name" => "FreeWheel Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 455
            ],
            [
                "creative_vendor_id" => 96,
                "creative_vendor_name" => "GPM-Digital Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 456
            ],
            [
                "creative_vendor_id" => 97,
                "creative_vendor_name" => "Massmotionmedia Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 458
            ],
            [
                "creative_vendor_id" => 98,
                "creative_vendor_name" => "Next Performance Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 459
            ],
            [
                "creative_vendor_id" => 99,
                "creative_vendor_name" => "Oggifinogi Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 460
            ],
            [
                "creative_vendor_id" => 100,
                "creative_vendor_name" => "Specific Media Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 462
            ],
            [
                "creative_vendor_id" => 101,
                "creative_vendor_name" => "Struq Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 468
            ],
            [
                "creative_vendor_id" => 102,
                "creative_vendor_name" => "Audience Science Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 470
            ],
            [
                "creative_vendor_id" => 103,
                "creative_vendor_name" => "Movad Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 471
            ],
            [
                "creative_vendor_id" => 104,
                "creative_vendor_name" => "DoubleVerify BrandShield - Ad Swapping",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 477
            ],
            [
                "creative_vendor_id" => 105,
                "creative_vendor_name" => "AdMotion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 478
            ],
            [
                "creative_vendor_id" => 106,
                "creative_vendor_name" => "eyeReturn Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 479
            ],
            [
                "creative_vendor_id" => 107,
                "creative_vendor_name" => "comScore - VoiceFive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 485
            ],
            [
                "creative_vendor_id" => 108,
                "creative_vendor_name" => "AdLoox - Ad Swapping",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 486
            ],
            [
                "creative_vendor_id" => 109,
                "creative_vendor_name" => "DYNADMIC SAS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 488
            ],
            [
                "creative_vendor_id" => 110,
                "creative_vendor_name" => "AdLedge - Ad Blocking",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 490
            ],
            [
                "creative_vendor_id" => 111,
                "creative_vendor_name" => "Smartstream.tv",
                "iab_gdpr_vendor_id" => 134,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 493
            ],
            [
                "creative_vendor_id" => 112,
                "creative_vendor_name" => "Flite - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 520
            ],
            [
                "creative_vendor_id" => 113,
                "creative_vendor_name" => "Spongecell - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 523
            ],
            [
                "creative_vendor_id" => 114,
                "creative_vendor_name" => "Chango",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 527
            ],
            [
                "creative_vendor_id" => 115,
                "creative_vendor_name" => "Xaxis for Publishers Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 528
            ],
            [
                "creative_vendor_id" => 116,
                "creative_vendor_name" => "Videoplaza",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 536
            ],
            [
                "creative_vendor_id" => 117,
                "creative_vendor_name" => "Public Eye",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 537
            ],
            [
                "creative_vendor_id" => 118,
                "creative_vendor_name" => "Weborama Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 538
            ],
            [
                "creative_vendor_id" => 119,
                "creative_vendor_name" => "Adform - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 539
            ],
            [
                "creative_vendor_id" => 120,
                "creative_vendor_name" => "Hubrus Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 540
            ],
            [
                "creative_vendor_id" => 121,
                "creative_vendor_name" => "Freakout Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 545
            ],
            [
                "creative_vendor_id" => 122,
                "creative_vendor_name" => "Adap.TV DSP Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 546
            ],
            [
                "creative_vendor_id" => 123,
                "creative_vendor_name" => "Adnologies Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 548
            ],
            [
                "creative_vendor_id" => 124,
                "creative_vendor_name" => "Predicta - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 549
            ],
            [
                "creative_vendor_id" => 125,
                "creative_vendor_name" => "Nielsen Digital Ad Ratings (formerly OCR)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 551
            ],
            [
                "creative_vendor_id" => 126,
                "creative_vendor_name" => "Valueclick Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 552
            ],
            [
                "creative_vendor_id" => 127,
                "creative_vendor_name" => "Kpsule - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 553
            ],
            [
                "creative_vendor_id" => 128,
                "creative_vendor_name" => "RTB Baltic (C8) Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 556
            ],
            [
                "creative_vendor_id" => 129,
                "creative_vendor_name" => "RunDSP Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 557
            ],
            [
                "creative_vendor_id" => 130,
                "creative_vendor_name" => "Noddington Technologies Limited (Aidata)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 564
            ],
            [
                "creative_vendor_id" => 131,
                "creative_vendor_name" => "Admotion - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 568
            ],
            [
                "creative_vendor_id" => 132,
                "creative_vendor_name" => "Contobox Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 569
            ],
            [
                "creative_vendor_id" => 133,
                "creative_vendor_name" => "Torrential Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 571
            ],
            [
                "creative_vendor_id" => 134,
                "creative_vendor_name" => "Webtrekk",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 572
            ],
            [
                "creative_vendor_id" => 135,
                "creative_vendor_name" => "Fabric Worldwide",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 573
            ],
            [
                "creative_vendor_id" => 136,
                "creative_vendor_name" => "Ru Target LLC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 577
            ],
            [
                "creative_vendor_id" => 137,
                "creative_vendor_name" => "Extreme Reach Digital Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 582
            ],
            [
                "creative_vendor_id" => 138,
                "creative_vendor_name" => "Platform ID Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 604
            ],
            [
                "creative_vendor_id" => 139,
                "creative_vendor_name" => "Datamind Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 605
            ],
            [
                "creative_vendor_id" => 140,
                "creative_vendor_name" => "Rockabox Media - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 608
            ],
            [
                "creative_vendor_id" => 141,
                "creative_vendor_name" => "Liquidus Marketing Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 610
            ],
            [
                "creative_vendor_id" => 142,
                "creative_vendor_name" => "Yahoo APT",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 611
            ],
            [
                "creative_vendor_id" => 143,
                "creative_vendor_name" => "Yahoo YAM+",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 612
            ],
            [
                "creative_vendor_id" => 144,
                "creative_vendor_name" => "Yahoo! Ad Exchange",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 613
            ],
            [
                "creative_vendor_id" => 145,
                "creative_vendor_name" => "Nielsen Digital Ad Ratings (formerly OCR) JS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 615
            ],
            [
                "creative_vendor_id" => 146,
                "creative_vendor_name" => "Demand Side Science",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 618
            ],
            [
                "creative_vendor_id" => 147,
                "creative_vendor_name" => "SiteScout Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 619
            ],
            [
                "creative_vendor_id" => 148,
                "creative_vendor_name" => "PlatformIQ Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 621
            ],
            [
                "creative_vendor_id" => 149,
                "creative_vendor_name" => "Human Demand",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 623
            ],
            [
                "creative_vendor_id" => 150,
                "creative_vendor_name" => "Thirdpresence",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 626
            ],
            [
                "creative_vendor_id" => 151,
                "creative_vendor_name" => "Knorex - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 633
            ],
            [
                "creative_vendor_id" => 152,
                "creative_vendor_name" => "Conversant CRM",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 670
            ],
            [
                "creative_vendor_id" => 153,
                "creative_vendor_name" => "Bridgewell Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 682
            ],
            [
                "creative_vendor_id" => 154,
                "creative_vendor_name" => "MezzoMedia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 713
            ],
            [
                "creative_vendor_id" => 155,
                "creative_vendor_name" => "Extreme Reach ad server",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 724
            ],
            [
                "creative_vendor_id" => 156,
                "creative_vendor_name" => "OOO GPM-Digital Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 726
            ],
            [
                "creative_vendor_id" => 157,
                "creative_vendor_name" => "mov.ad GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 746
            ],
            [
                "creative_vendor_id" => 158,
                "creative_vendor_name" => "Spark Flow",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 776
            ],
            [
                "creative_vendor_id" => 159,
                "creative_vendor_name" => "Scrutineer Survey",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 785
            ],
            [
                "creative_vendor_id" => 160,
                "creative_vendor_name" => "VideoHub DSP",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 791
            ],
            [
                "creative_vendor_id" => 161,
                "creative_vendor_name" => "Nielsen Catalina Solutions",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 798
            ],
            [
                "creative_vendor_id" => 162,
                "creative_vendor_name" => "Hatena",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 808
            ],
            [
                "creative_vendor_id" => 164,
                "creative_vendor_name" => "iPinyou - Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 820
            ],
            [
                "creative_vendor_id" => 165,
                "creative_vendor_name" => "Bonzai Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 863
            ],
            [
                "creative_vendor_id" => 166,
                "creative_vendor_name" => "INCUBIQ Solutions",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 864
            ],
            [
                "creative_vendor_id" => 167,
                "creative_vendor_name" => "Exponential Expandable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 876
            ],
            [
                "creative_vendor_id" => 168,
                "creative_vendor_name" => "Research and Analysis of Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 886
            ],
            [
                "creative_vendor_id" => 169,
                "creative_vendor_name" => "2KDirect Inc.",
                "iab_gdpr_vendor_id" => 217,
                "adx_gdpr_provider_id" => 3,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 170,
                "creative_vendor_name" => "Acuityads",
                "iab_gdpr_vendor_id" => 231,
                "adx_gdpr_provider_id" => 11,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 171,
                "creative_vendor_name" => "LiveRamp",
                "iab_gdpr_vendor_id" => 97,
                "adx_gdpr_provider_id" => 12,
                "adx_vendor_approval_id" => 574
            ],
            [
                "creative_vendor_id" => 172,
                "creative_vendor_name" => "Adara Media",
                "iab_gdpr_vendor_id" => 57,
                "adx_gdpr_provider_id" => 15,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 173,
                "creative_vendor_name" => "Adform",
                "iab_gdpr_vendor_id" => 50,
                "adx_gdpr_provider_id" => 22,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 174,
                "creative_vendor_name" => "AdPredictive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 43,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 175,
                "creative_vendor_name" => "Adriver",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 46,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 176,
                "creative_vendor_name" => "Integral Ad Science",
                "iab_gdpr_vendor_id" => 278,
                "adx_gdpr_provider_id" => 48,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 177,
                "creative_vendor_name" => "Adtelligence",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 55,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 178,
                "creative_vendor_name" => "Adverline",
                "iab_gdpr_vendor_id" => 41,
                "adx_gdpr_provider_id" => 57,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 179,
                "creative_vendor_name" => "Artsai",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 61,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 180,
                "creative_vendor_name" => "comScore",
                "iab_gdpr_vendor_id" => 77,
                "adx_gdpr_provider_id" => 62,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 181,
                "creative_vendor_name" => "affilinet",
                "iab_gdpr_vendor_id" => 3,
                "adx_gdpr_provider_id" => 66,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 182,
                "creative_vendor_name" => "Akamai Technologies Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 70,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 183,
                "creative_vendor_name" => "Arbigo Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 83,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 184,
                "creative_vendor_name" => "Taboola",
                "iab_gdpr_vendor_id" => 42,
                "adx_gdpr_provider_id" => 86,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 185,
                "creative_vendor_name" => "Facebook",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 89,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 186,
                "creative_vendor_name" => "Booking.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 108,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 187,
                "creative_vendor_name" => "C3 Metrics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 122,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 188,
                "creative_vendor_name" => "CapitalData",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 124,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 189,
                "creative_vendor_name" => "E-Planning",
                "iab_gdpr_vendor_id" => 90,
                "adx_gdpr_provider_id" => 125,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 190,
                "creative_vendor_name" => "Index Exchange",
                "iab_gdpr_vendor_id" => 10,
                "adx_gdpr_provider_id" => 126,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 191,
                "creative_vendor_name" => "Chitika",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 131,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 192,
                "creative_vendor_name" => "Platform161",
                "iab_gdpr_vendor_id" => 140,
                "adx_gdpr_provider_id" => 134,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 193,
                "creative_vendor_name" => "ClickForce",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 135,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 194,
                "creative_vendor_name" => "Clickpoint",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 136,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 195,
                "creative_vendor_name" => "Connexity",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 143,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 196,
                "creative_vendor_name" => "Constant Contact",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 144,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 197,
                "creative_vendor_name" => "Conversive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 147,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 198,
                "creative_vendor_name" => "IBM",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 149,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 199,
                "creative_vendor_name" => "Crimtan",
                "iab_gdpr_vendor_id" => 85,
                "adx_gdpr_provider_id" => 153,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 200,
                "creative_vendor_name" => "Criteo",
                "iab_gdpr_vendor_id" => 91,
                "adx_gdpr_provider_id" => 154,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 201,
                "creative_vendor_name" => "DAC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 159,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 202,
                "creative_vendor_name" => "DataXu",
                "iab_gdpr_vendor_id" => 71,
                "adx_gdpr_provider_id" => 161,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 203,
                "creative_vendor_name" => "PulsePoint",
                "iab_gdpr_vendor_id" => 81,
                "adx_gdpr_provider_id" => 162,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 204,
                "creative_vendor_name" => "Delta Projects",
                "iab_gdpr_vendor_id" => 209,
                "adx_gdpr_provider_id" => 165,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 205,
                "creative_vendor_name" => "Demandbase",
                "iab_gdpr_vendor_id" => 397,
                "adx_gdpr_provider_id" => 167,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 206,
                "creative_vendor_name" => "Digitize",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 171,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 207,
                "creative_vendor_name" => "Effinity",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 188,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 208,
                "creative_vendor_name" => "engageBDR",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 192,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 209,
                "creative_vendor_name" => "Evidon",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 196,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 210,
                "creative_vendor_name" => "Eyereturn Marketing",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 202,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 211,
                "creative_vendor_name" => "Forbes",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 211,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 212,
                "creative_vendor_name" => "Fringe81",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 218,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 213,
                "creative_vendor_name" => "Gemius",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 221,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 214,
                "creative_vendor_name" => "Google",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 229,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 215,
                "creative_vendor_name" => "GroovinAds",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 230,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 216,
                "creative_vendor_name" => "Adacado",
                "iab_gdpr_vendor_id" => 147,
                "adx_gdpr_provider_id" => 236,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 217,
                "creative_vendor_name" => "HQ GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 239,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 218,
                "creative_vendor_name" => "hurra.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 241,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 219,
                "creative_vendor_name" => "Infectious Media",
                "iab_gdpr_vendor_id" => 105,
                "adx_gdpr_provider_id" => 253,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 220,
                "creative_vendor_name" => "intelliAd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 259,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 221,
                "creative_vendor_name" => "Interpolls",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 266,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 222,
                "creative_vendor_name" => "Bidswitch",
                "iab_gdpr_vendor_id" => 128,
                "adx_gdpr_provider_id" => 271,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 223,
                "creative_vendor_name" => "Kwanzoo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 286,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 224,
                "creative_vendor_name" => "Lotame",
                "iab_gdpr_vendor_id" => 95,
                "adx_gdpr_provider_id" => 294,
                "adx_vendor_approval_id" => 242
            ],
            [
                "creative_vendor_id" => 225,
                "creative_vendor_name" => "Mobfox",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 303,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 226,
                "creative_vendor_name" => "Media Force",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 308,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 227,
                "creative_vendor_name" => "MiQ",
                "iab_gdpr_vendor_id" => 101,
                "adx_gdpr_provider_id" => 310,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 228,
                "creative_vendor_name" => "Dstillery",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 311,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 229,
                "creative_vendor_name" => "DMA Institute",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 317,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 230,
                "creative_vendor_name" => "ZMS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 323,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 231,
                "creative_vendor_name" => "Neodata Group",
                "iab_gdpr_vendor_id" => 450,
                "adx_gdpr_provider_id" => 336,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 232,
                "creative_vendor_name" => "Relay42",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 340,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 233,
                "creative_vendor_name" => "GfK",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 350,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 234,
                "creative_vendor_name" => "Omnicom Media Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 358,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 235,
                "creative_vendor_name" => "Adobe Advertising Cloud",
                "iab_gdpr_vendor_id" => 264,
                "adx_gdpr_provider_id" => 359,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 236,
                "creative_vendor_name" => "OpenSlate",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 367,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 237,
                "creative_vendor_name" => "Thunder",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 370,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 238,
                "creative_vendor_name" => "Piximedia",
                "iab_gdpr_vendor_id" => 127,
                "adx_gdpr_provider_id" => 384,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 239,
                "creative_vendor_name" => "PlatformOne",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 385,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 240,
                "creative_vendor_name" => "PopRule",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 389,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 241,
                "creative_vendor_name" => "TimeOne",
                "iab_gdpr_vendor_id" => 201,
                "adx_gdpr_provider_id" => 393,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 242,
                "creative_vendor_name" => "Pulpo (An Entravision Company)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 394,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 243,
                "creative_vendor_name" => "Viewbix",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 397,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 244,
                "creative_vendor_name" => "Recruit JP",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 407,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 245,
                "creative_vendor_name" => "RN SSI Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 414,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 246,
                "creative_vendor_name" => "Resonate",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 415,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 247,
                "creative_vendor_name" => "SUITE 66",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 424,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 248,
                "creative_vendor_name" => "adnanny.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 429,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 249,
                "creative_vendor_name" => "Scigineer",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 430,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 250,
                "creative_vendor_name" => "AdRoll, Inc.",
                "iab_gdpr_vendor_id" => 130,
                "adx_gdpr_provider_id" => 432,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 251,
                "creative_vendor_name" => "Mediahead",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 436,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 252,
                "creative_vendor_name" => "Simpli.fi",
                "iab_gdpr_vendor_id" => 73,
                "adx_gdpr_provider_id" => 438,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 253,
                "creative_vendor_name" => "Centro",
                "iab_gdpr_vendor_id" => 156,
                "adx_gdpr_provider_id" => 440,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 254,
                "creative_vendor_name" => "Smart",
                "iab_gdpr_vendor_id" => 45,
                "adx_gdpr_provider_id" => 442,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 255,
                "creative_vendor_name" => "So-net Media Networks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 445,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 256,
                "creative_vendor_name" => "Sojern",
                "iab_gdpr_vendor_id" => 295,
                "adx_gdpr_provider_id" => 449,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 257,
                "creative_vendor_name" => "Spartoo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 453,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 258,
                "creative_vendor_name" => "Tradedoubler",
                "iab_gdpr_vendor_id" => 443,
                "adx_gdpr_provider_id" => 486,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 259,
                "creative_vendor_name" => "Exponential",
                "iab_gdpr_vendor_id" => 1,
                "adx_gdpr_provider_id" => 492,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 260,
                "creative_vendor_name" => "True Ultimate Standards Everywhere Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 494,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 261,
                "creative_vendor_name" => "TruEffect",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 495,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 262,
                "creative_vendor_name" => "Underdog Media",
                "iab_gdpr_vendor_id" => 159,
                "adx_gdpr_provider_id" => 503,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 263,
                "creative_vendor_name" => "Markit",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 523,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 264,
                "creative_vendor_name" => "emetriq",
                "iab_gdpr_vendor_id" => 213,
                "adx_gdpr_provider_id" => 537,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 265,
                "creative_vendor_name" => "Yieldr",
                "iab_gdpr_vendor_id" => 340,
                "adx_gdpr_provider_id" => 540,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 266,
                "creative_vendor_name" => "CyberAgent",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 550,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 267,
                "creative_vendor_name" => "DaVinci11",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 559,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 268,
                "creative_vendor_name" => "顶新",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 560,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 269,
                "creative_vendor_name" => "Mashero",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 568,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 270,
                "creative_vendor_name" => "Betgenius",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 571,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 271,
                "creative_vendor_name" => "advolution.control",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 574,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 272,
                "creative_vendor_name" => "Exactag",
                "iab_gdpr_vendor_id" => 312,
                "adx_gdpr_provider_id" => 575,
                "adx_vendor_approval_id" => 497
            ],
            [
                "creative_vendor_id" => 273,
                "creative_vendor_name" => "MicroAd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 576,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 274,
                "creative_vendor_name" => "Zanox",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 585,
                "adx_vendor_approval_id" => 225
            ],
            [
                "creative_vendor_id" => 275,
                "creative_vendor_name" => "Meetrics",
                "iab_gdpr_vendor_id" => 152,
                "adx_gdpr_provider_id" => 590,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 276,
                "creative_vendor_name" => "Miaozhen Systems",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 591,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 277,
                "creative_vendor_name" => "nugg.ad",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 592,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 278,
                "creative_vendor_name" => "Commanders Act",
                "iab_gdpr_vendor_id" => 416,
                "adx_gdpr_provider_id" => 595,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 279,
                "creative_vendor_name" => "LifeStreet",
                "iab_gdpr_vendor_id" => 67,
                "adx_gdpr_provider_id" => 609,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 280,
                "creative_vendor_name" => "AdLedge",
                "iab_gdpr_vendor_id" => 484,
                "adx_gdpr_provider_id" => 624,
                "adx_vendor_approval_id" => 342
            ],
            [
                "creative_vendor_id" => 281,
                "creative_vendor_name" => "MainADV",
                "iab_gdpr_vendor_id" => 317,
                "adx_gdpr_provider_id" => 723,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 282,
                "creative_vendor_name" => "Mediarithmics",
                "iab_gdpr_vendor_id" => 184,
                "adx_gdpr_provider_id" => 725,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 283,
                "creative_vendor_name" => "Adadyn",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 733,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 284,
                "creative_vendor_name" => "EASYmedia",
                "iab_gdpr_vendor_id" => 168,
                "adx_gdpr_provider_id" => 776,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 285,
                "creative_vendor_name" => "Rakuten Marketing",
                "iab_gdpr_vendor_id" => 60,
                "adx_gdpr_provider_id" => 782,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 286,
                "creative_vendor_name" => "Refined Labs",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 783,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 287,
                "creative_vendor_name" => "Emerse",
                "iab_gdpr_vendor_id" => 8,
                "adx_gdpr_provider_id" => 797,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 288,
                "creative_vendor_name" => "AdMaster/LnData",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 802,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 289,
                "creative_vendor_name" => "Ensighten",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 817,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 290,
                "creative_vendor_name" => "econda GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 820,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 291,
                "creative_vendor_name" => "Yusp",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 821,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 292,
                "creative_vendor_name" => "d3media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 829,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 293,
                "creative_vendor_name" => "LivelyImpact",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 839,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 294,
                "creative_vendor_name" => "Verve",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 853,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 295,
                "creative_vendor_name" => "AdElement",
                "iab_gdpr_vendor_id" => 196,
                "adx_gdpr_provider_id" => 867,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 296,
                "creative_vendor_name" => "QuarticON",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 899,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 297,
                "creative_vendor_name" => "Novem",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 922,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 298,
                "creative_vendor_name" => "NET-Metrix AG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 926,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 299,
                "creative_vendor_name" => "adTarget.me",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 931,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 300,
                "creative_vendor_name" => "advanced STORE GmbH",
                "iab_gdpr_vendor_id" => 195,
                "adx_gdpr_provider_id" => 932,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 301,
                "creative_vendor_name" => "TripleLift",
                "iab_gdpr_vendor_id" => 28,
                "adx_gdpr_provider_id" => 933,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 302,
                "creative_vendor_name" => "Adzerk",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 938,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 303,
                "creative_vendor_name" => "OkraMedia Contobox",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 947,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 304,
                "creative_vendor_name" => "GDM Services, Inc d/b/a Fiksu DSP",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 955,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 305,
                "creative_vendor_name" => "Semasio GmbH",
                "iab_gdpr_vendor_id" => 84,
                "adx_gdpr_provider_id" => 976,
                "adx_vendor_approval_id" => 793
            ],
            [
                "creative_vendor_id" => 306,
                "creative_vendor_name" => "Silver Egg Technology",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 979,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 307,
                "creative_vendor_name" => "Tinkoff.ru",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 985,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 308,
                "creative_vendor_name" => "Celtra",
                "iab_gdpr_vendor_id" => 315,
                "adx_gdpr_provider_id" => 987,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 309,
                "creative_vendor_name" => "AudienceProject",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 991,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 310,
                "creative_vendor_name" => "KPI Solutions",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1003,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 311,
                "creative_vendor_name" => "Polldaddy",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1024,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 312,
                "creative_vendor_name" => "MaxCDN",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1027,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 313,
                "creative_vendor_name" => "PubMatic",
                "iab_gdpr_vendor_id" => 76,
                "adx_gdpr_provider_id" => 1028,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 314,
                "creative_vendor_name" => "Rubicon Project",
                "iab_gdpr_vendor_id" => 52,
                "adx_gdpr_provider_id" => 1029,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 315,
                "creative_vendor_name" => "Yandex",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1033,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 316,
                "creative_vendor_name" => "Rutarget",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1034,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 317,
                "creative_vendor_name" => "Adblade",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1040,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 318,
                "creative_vendor_name" => "Scenestealer",
                "iab_gdpr_vendor_id" => 86,
                "adx_gdpr_provider_id" => 1048,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 319,
                "creative_vendor_name" => "Netquest",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1051,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 320,
                "creative_vendor_name" => "mediasmart",
                "iab_gdpr_vendor_id" => 193,
                "adx_gdpr_provider_id" => 1052,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 321,
                "creative_vendor_name" => "Mixmarket Affiliate Network",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1053,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 322,
                "creative_vendor_name" => "Turbobytes",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1054,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 323,
                "creative_vendor_name" => "eSearchVivsion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1059,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 324,
                "creative_vendor_name" => "Blismedia",
                "iab_gdpr_vendor_id" => 94,
                "adx_gdpr_provider_id" => 1063,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 325,
                "creative_vendor_name" => "Mail.ru",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1067,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 326,
                "creative_vendor_name" => "SMARTSTREAM",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1072,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 327,
                "creative_vendor_name" => "Manage.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1095,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 328,
                "creative_vendor_name" => "Cloudflare",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1097,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 329,
                "creative_vendor_name" => "Brainworkz",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1099,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 330,
                "creative_vendor_name" => "FUSIO BY S4M",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1100,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 331,
                "creative_vendor_name" => "Thomann",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1104,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 332,
                "creative_vendor_name" => "TROVIT",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1107,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 333,
                "creative_vendor_name" => "Salesforce DMP",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1126,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 334,
                "creative_vendor_name" => "Scoota",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1127,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 335,
                "creative_vendor_name" => "Tagtoo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1149,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 336,
                "creative_vendor_name" => "Addroid",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1152,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 337,
                "creative_vendor_name" => "Inmind",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1162,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 338,
                "creative_vendor_name" => "Bridgewell",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1166,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 339,
                "creative_vendor_name" => "UDG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1170,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 340,
                "creative_vendor_name" => "Pixalate",
                "iab_gdpr_vendor_id" => 384,
                "adx_gdpr_provider_id" => 1171,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 341,
                "creative_vendor_name" => "Advanse",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1188,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 342,
                "creative_vendor_name" => "Audiencevalue",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1192,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 343,
                "creative_vendor_name" => "Havas Media France - DBi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1201,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 344,
                "creative_vendor_name" => "Extreme Reach",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1204,
                "adx_vendor_approval_id" => 480
            ],
            [
                "creative_vendor_id" => 345,
                "creative_vendor_name" => "Netflix",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1205,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 346,
                "creative_vendor_name" => "Macromill group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1211,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 347,
                "creative_vendor_name" => "numberly",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1212,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 348,
                "creative_vendor_name" => "GetIntent",
                "iab_gdpr_vendor_id" => 369,
                "adx_gdpr_provider_id" => 1215,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 349,
                "creative_vendor_name" => "GoldSpot Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1220,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 350,
                "creative_vendor_name" => "DYNADMIC",
                "iab_gdpr_vendor_id" => 434,
                "adx_gdpr_provider_id" => 1225,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 351,
                "creative_vendor_name" => "Lockon",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1226,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 352,
                "creative_vendor_name" => "Trafmag",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1227,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 353,
                "creative_vendor_name" => "Ligatus",
                "iab_gdpr_vendor_id" => 225,
                "adx_gdpr_provider_id" => 1230,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 354,
                "creative_vendor_name" => "AdClear",
                "iab_gdpr_vendor_id" => 299,
                "adx_gdpr_provider_id" => 1232,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 355,
                "creative_vendor_name" => "Kantar",
                "iab_gdpr_vendor_id" => 345,
                "adx_gdpr_provider_id" => 1236,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 356,
                "creative_vendor_name" => "travel audience – An Amadeus Company",
                "iab_gdpr_vendor_id" => 423,
                "adx_gdpr_provider_id" => 1241,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 357,
                "creative_vendor_name" => "Adventori",
                "iab_gdpr_vendor_id" => 27,
                "adx_gdpr_provider_id" => 1248,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 358,
                "creative_vendor_name" => "MindTake Research",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1250,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 359,
                "creative_vendor_name" => "CoAdvertise",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1252,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 360,
                "creative_vendor_name" => "Adcash",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1268,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 361,
                "creative_vendor_name" => "hybrid.ai",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1275,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 362,
                "creative_vendor_name" => "ebuilders",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1276,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 363,
                "creative_vendor_name" => "AdGibbon BV",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1284,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 364,
                "creative_vendor_name" => "Wider Planet",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1286,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 365,
                "creative_vendor_name" => "GO.PL",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1298,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 366,
                "creative_vendor_name" => "AppLovin Corp.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1301,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 367,
                "creative_vendor_name" => "SourceKnowledge",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1307,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 368,
                "creative_vendor_name" => "M,P,NEWMEDIA,",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1312,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 369,
                "creative_vendor_name" => "MBR Targeting Gmbh",
                "iab_gdpr_vendor_id" => 137,
                "adx_gdpr_provider_id" => 1313,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 370,
                "creative_vendor_name" => "Clearstream.TV, Inc",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1329,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 371,
                "creative_vendor_name" => "Nano Interactive",
                "iab_gdpr_vendor_id" => 72,
                "adx_gdpr_provider_id" => 1344,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 372,
                "creative_vendor_name" => "CrossInstall, Inc",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1345,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 373,
                "creative_vendor_name" => "OVC GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1356,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 374,
                "creative_vendor_name" => "Mobpro",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1362,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 375,
                "creative_vendor_name" => "Fractional Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1365,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 376,
                "creative_vendor_name" => "Adsniper",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1375,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 377,
                "creative_vendor_name" => "LINK Institut",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1403,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 378,
                "creative_vendor_name" => "Appier",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1409,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 379,
                "creative_vendor_name" => "Sparks47",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1411,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 380,
                "creative_vendor_name" => "Rackspace",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1415,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 381,
                "creative_vendor_name" => "MediaWallah",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1416,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 382,
                "creative_vendor_name" => "Signal",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1419,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 383,
                "creative_vendor_name" => "Liftoff",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1423,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 384,
                "creative_vendor_name" => "Zentrick",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1442,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 385,
                "creative_vendor_name" => "MSI-ACI",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1449,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 386,
                "creative_vendor_name" => "Arrivalist",
                "iab_gdpr_vendor_id" => 409,
                "adx_gdpr_provider_id" => 1451,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 387,
                "creative_vendor_name" => "Kimia Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1455,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 388,
                "creative_vendor_name" => "ZypMedia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1456,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 389,
                "creative_vendor_name" => "adhood",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1496,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 390,
                "creative_vendor_name" => "Localsensor",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1503,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 391,
                "creative_vendor_name" => "White Ops",
                "iab_gdpr_vendor_id" => 431,
                "adx_gdpr_provider_id" => 1509,
                "adx_vendor_approval_id" => 743
            ],
            [
                "creative_vendor_id" => 392,
                "creative_vendor_name" => "Vserv",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1512,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 393,
                "creative_vendor_name" => "Admetrics",
                "iab_gdpr_vendor_id" => 22,
                "adx_gdpr_provider_id" => 1514,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 394,
                "creative_vendor_name" => "Amobee",
                "iab_gdpr_vendor_id" => 23,
                "adx_gdpr_provider_id" => 1517,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 395,
                "creative_vendor_name" => "RTB House",
                "iab_gdpr_vendor_id" => 16,
                "adx_gdpr_provider_id" => 1520,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 396,
                "creative_vendor_name" => "Datalicious",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1525,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 397,
                "creative_vendor_name" => "Nordic Factory Solutions AB",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1547,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 398,
                "creative_vendor_name" => "Exposebox",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1548,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 399,
                "creative_vendor_name" => "YOOSE",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1555,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 400,
                "creative_vendor_name" => "Navegg",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1570,
                "adx_vendor_approval_id" => 880
            ],
            [
                "creative_vendor_id" => 401,
                "creative_vendor_name" => "INFOnline",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1575,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 402,
                "creative_vendor_name" => "Moot",
                "iab_gdpr_vendor_id" => 151,
                "adx_gdpr_provider_id" => 1577,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 403,
                "creative_vendor_name" => "Taptica",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1579,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 404,
                "creative_vendor_name" => "Joystick Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1583,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 405,
                "creative_vendor_name" => "[24]7.ai (successor to EngageClick)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1584,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 406,
                "creative_vendor_name" => "Simplaex GmBH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1591,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 407,
                "creative_vendor_name" => "Kochava",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1598,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 408,
                "creative_vendor_name" => "Maverick",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1603,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 409,
                "creative_vendor_name" => "Appreciate",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1608,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 410,
                "creative_vendor_name" => "FuelX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1613,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 411,
                "creative_vendor_name" => "ucfunnel",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1626,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 412,
                "creative_vendor_name" => "Interpublic Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1631,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 413,
                "creative_vendor_name" => "abilicom",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1633,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 414,
                "creative_vendor_name" => "TapSense",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1638,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 415,
                "creative_vendor_name" => "Admixer",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1642,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 416,
                "creative_vendor_name" => "Placecast",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1648,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 417,
                "creative_vendor_name" => "Mobitrans",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1651,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 418,
                "creative_vendor_name" => "Smadex",
                "iab_gdpr_vendor_id" => 161,
                "adx_gdpr_provider_id" => 1652,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 419,
                "creative_vendor_name" => "Mobusi",
                "iab_gdpr_vendor_id" => 403,
                "adx_gdpr_provider_id" => 1653,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 420,
                "creative_vendor_name" => "Orbis Video",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1660,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 421,
                "creative_vendor_name" => "Suzumuchi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1665,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 422,
                "creative_vendor_name" => "LOKA Research",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1667,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 423,
                "creative_vendor_name" => "AppLift",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1674,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 424,
                "creative_vendor_name" => "IGAWorks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1677,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 425,
                "creative_vendor_name" => "Aidata",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1678,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 426,
                "creative_vendor_name" => "OneDigitalAd Technologies",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1682,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 427,
                "creative_vendor_name" => "Teads.TV",
                "iab_gdpr_vendor_id" => 132,
                "adx_gdpr_provider_id" => 1684,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 428,
                "creative_vendor_name" => "Clickagy",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1703,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 430,
                "creative_vendor_name" => "ADEX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1716,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 431,
                "creative_vendor_name" => "GroundTruth",
                "iab_gdpr_vendor_id" => 51,
                "adx_gdpr_provider_id" => 1720,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 432,
                "creative_vendor_name" => "Rontar",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1721,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 433,
                "creative_vendor_name" => "YOptima",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1722,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 434,
                "creative_vendor_name" => "Placed",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1725,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 435,
                "creative_vendor_name" => "Answer Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1732,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 436,
                "creative_vendor_name" => "LoopMe",
                "iab_gdpr_vendor_id" => 109,
                "adx_gdpr_provider_id" => 1733,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 437,
                "creative_vendor_name" => "Impact",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1735,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 438,
                "creative_vendor_name" => "Kwanko",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1739,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 439,
                "creative_vendor_name" => "APNIC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1750,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 440,
                "creative_vendor_name" => "Spotad",
                "iab_gdpr_vendor_id" => 208,
                "adx_gdpr_provider_id" => 1753,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 441,
                "creative_vendor_name" => "Aarki",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1765,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 442,
                "creative_vendor_name" => "Papayamobile",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1775,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 443,
                "creative_vendor_name" => "MGID",
                "iab_gdpr_vendor_id" => 358,
                "adx_gdpr_provider_id" => 1780,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 444,
                "creative_vendor_name" => "F@N communications",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1782,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 445,
                "creative_vendor_name" => "media.ventive GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1784,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 446,
                "creative_vendor_name" => "Universo Online",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1786,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 447,
                "creative_vendor_name" => "Remerge",
                "iab_gdpr_vendor_id" => 192,
                "adx_gdpr_provider_id" => 1791,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 448,
                "creative_vendor_name" => "Telecoming",
                "iab_gdpr_vendor_id" => 336,
                "adx_gdpr_provider_id" => 1794,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 449,
                "creative_vendor_name" => "LinkedIn",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1799,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 450,
                "creative_vendor_name" => "VIVALU",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1800,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 451,
                "creative_vendor_name" => "Foursquare",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1810,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 452,
                "creative_vendor_name" => "usemax (Emego GmbH)",
                "iab_gdpr_vendor_id" => 212,
                "adx_gdpr_provider_id" => 1831,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 453,
                "creative_vendor_name" => "Housing.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1832,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 454,
                "creative_vendor_name" => "Avocet",
                "iab_gdpr_vendor_id" => 63,
                "adx_gdpr_provider_id" => 1834,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 455,
                "creative_vendor_name" => "Interrogare GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1837,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 456,
                "creative_vendor_name" => "The Bridge",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1840,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 457,
                "creative_vendor_name" => "Bonzai",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1843,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 458,
                "creative_vendor_name" => "Clickonometrics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1844,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 459,
                "creative_vendor_name" => "Adventive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1845,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 460,
                "creative_vendor_name" => "Optimise",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1859,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 461,
                "creative_vendor_name" => "AKTYVUS SEKTORIUS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1863,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 462,
                "creative_vendor_name" => "Demand Side Science, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1866,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 463,
                "creative_vendor_name" => "ESV",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1872,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 465,
                "creative_vendor_name" => "Erate",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1880,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 466,
                "creative_vendor_name" => "Norstat",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1882,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 467,
                "creative_vendor_name" => "Knorex",
                "iab_gdpr_vendor_id" => 325,
                "adx_gdpr_provider_id" => 1883,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 468,
                "creative_vendor_name" => "Waystack",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1889,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 469,
                "creative_vendor_name" => "PERMODO",
                "iab_gdpr_vendor_id" => 139,
                "adx_gdpr_provider_id" => 1892,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 470,
                "creative_vendor_name" => "Clinch",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1896,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 471,
                "creative_vendor_name" => "Mobile Innovations",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1898,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 472,
                "creative_vendor_name" => "Epic Combo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1899,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 473,
                "creative_vendor_name" => "Lucid",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1905,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 475,
                "creative_vendor_name" => "Moloco Ads",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1922,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 476,
                "creative_vendor_name" => "Alkemics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1929,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 477,
                "creative_vendor_name" => "Sodel Software Solutions Pvt. Ltd.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1934,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 478,
                "creative_vendor_name" => "NinthDecimal",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1942,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 479,
                "creative_vendor_name" => "RichMedia Studio",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1943,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 480,
                "creative_vendor_name" => "TenMax",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1944,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 481,
                "creative_vendor_name" => "TreSensa",
                "iab_gdpr_vendor_id" => 88,
                "adx_gdpr_provider_id" => 1958,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 482,
                "creative_vendor_name" => "Adludio",
                "iab_gdpr_vendor_id" => 447,
                "adx_gdpr_provider_id" => 1960,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 483,
                "creative_vendor_name" => "LotLinx®",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1962,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 484,
                "creative_vendor_name" => "A1platform",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1964,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 485,
                "creative_vendor_name" => "KEEN",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1968,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 486,
                "creative_vendor_name" => "Gridsum",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1978,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 487,
                "creative_vendor_name" => "Bigabid",
                "iab_gdpr_vendor_id" => 218,
                "adx_gdpr_provider_id" => 1987,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 488,
                "creative_vendor_name" => "Azameo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2003,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 489,
                "creative_vendor_name" => "DTS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2012,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 490,
                "creative_vendor_name" => "Localstars",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2027,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 491,
                "creative_vendor_name" => "Roy Morgan Research",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2035,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 492,
                "creative_vendor_name" => "Market Points, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2038,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 493,
                "creative_vendor_name" => "Kadam",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2039,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 494,
                "creative_vendor_name" => "Adbalancer",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2044,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 495,
                "creative_vendor_name" => "StreamRail",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2052,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 496,
                "creative_vendor_name" => "Treepodia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2056,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 497,
                "creative_vendor_name" => "RhythmOne LLC",
                "iab_gdpr_vendor_id" => 36,
                "adx_gdpr_provider_id" => 2059,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 498,
                "creative_vendor_name" => "Bluecore, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2064,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 499,
                "creative_vendor_name" => "Optimize LCC D.B.A Genius Monkey",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2068,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 500,
                "creative_vendor_name" => "Ubimo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2070,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 501,
                "creative_vendor_name" => "gskinner",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2072,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 502,
                "creative_vendor_name" => "TEEMO",
                "iab_gdpr_vendor_id" => 124,
                "adx_gdpr_provider_id" => 2078,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 503,
                "creative_vendor_name" => "OTTO",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2079,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 504,
                "creative_vendor_name" => "EVC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2084,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 505,
                "creative_vendor_name" => "tapCLIQ",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2088,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 506,
                "creative_vendor_name" => "ADBOX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2090,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 507,
                "creative_vendor_name" => "Herolens",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2095,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 508,
                "creative_vendor_name" => "Splicky",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2100,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 509,
                "creative_vendor_name" => "Crutchfield",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2103,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 510,
                "creative_vendor_name" => "Chalk Digital",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2107,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 511,
                "creative_vendor_name" => "Bizible",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2109,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 512,
                "creative_vendor_name" => "Vidazoo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2113,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 513,
                "creative_vendor_name" => "Neuralone",
                "iab_gdpr_vendor_id" => 37,
                "adx_gdpr_provider_id" => 2121,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 514,
                "creative_vendor_name" => "DeltaX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2133,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 515,
                "creative_vendor_name" => "Somo Audience",
                "iab_gdpr_vendor_id" => 341,
                "adx_gdpr_provider_id" => 2137,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 516,
                "creative_vendor_name" => "Art of Click",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2140,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 517,
                "creative_vendor_name" => "Adways SAS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2141,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 518,
                "creative_vendor_name" => "Quantasy",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2145,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 519,
                "creative_vendor_name" => "ENVISIONX LTD",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2147,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 520,
                "creative_vendor_name" => "Wavenet",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2150,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 521,
                "creative_vendor_name" => "twyn",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2156,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 522,
                "creative_vendor_name" => "Happyfication inc",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2166,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 523,
                "creative_vendor_name" => "Roq.ad",
                "iab_gdpr_vendor_id" => 4,
                "adx_gdpr_provider_id" => 2170,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 524,
                "creative_vendor_name" => "WAP.CO.UK",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2171,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 525,
                "creative_vendor_name" => "AdKernel",
                "iab_gdpr_vendor_id" => 14,
                "adx_gdpr_provider_id" => 2176,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 526,
                "creative_vendor_name" => "Adello",
                "iab_gdpr_vendor_id" => 258,
                "adx_gdpr_provider_id" => 2177,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 527,
                "creative_vendor_name" => "Sled, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2179,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 528,
                "creative_vendor_name" => "Tribes Research",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2183,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 529,
                "creative_vendor_name" => "KeyCDN",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2186,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 530,
                "creative_vendor_name" => "TACTIC™ Real-Time Marketing",
                "iab_gdpr_vendor_id" => 466,
                "adx_gdpr_provider_id" => 2192,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 531,
                "creative_vendor_name" => "A1 Media Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2198,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 532,
                "creative_vendor_name" => "AdTriba",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2202,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 533,
                "creative_vendor_name" => "MEDIAN",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2205,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 534,
                "creative_vendor_name" => "Adssets",
                "iab_gdpr_vendor_id" => 205,
                "adx_gdpr_provider_id" => 2214,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 535,
                "creative_vendor_name" => "Sellpoints",
                "iab_gdpr_vendor_id" => 188,
                "adx_gdpr_provider_id" => 2216,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 536,
                "creative_vendor_name" => "HockeyCurve",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2219,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 537,
                "creative_vendor_name" => "Umeng Plus Beijing Technology Limited Company",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2220,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 538,
                "creative_vendor_name" => "AdTrader",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2222,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 539,
                "creative_vendor_name" => "Survata",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2223,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 540,
                "creative_vendor_name" => "IQM",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2224,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 541,
                "creative_vendor_name" => "JustWatch",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2225,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 542,
                "creative_vendor_name" => "Video Research Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2227,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 543,
                "creative_vendor_name" => "Unisport",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2228,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 544,
                "creative_vendor_name" => "Softcube",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2234,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 546,
                "creative_vendor_name" => "Inspired Mobile",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2251,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 547,
                "creative_vendor_name" => "CUBED",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2253,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 548,
                "creative_vendor_name" => "DistroScale",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2262,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 549,
                "creative_vendor_name" => "ComboTag",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2264,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 550,
                "creative_vendor_name" => "AerServ",
                "iab_gdpr_vendor_id" => 359,
                "adx_gdpr_provider_id" => 2271,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 551,
                "creative_vendor_name" => "Adtelligent Inc.",
                "iab_gdpr_vendor_id" => 410,
                "adx_gdpr_provider_id" => 2276,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 552,
                "creative_vendor_name" => "SpringServe",
                "iab_gdpr_vendor_id" => 293,
                "adx_gdpr_provider_id" => 2278,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 553,
                "creative_vendor_name" => "Intimate Merger",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2279,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 554,
                "creative_vendor_name" => "INCUBIQ",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2282,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 555,
                "creative_vendor_name" => "On Device Research",
                "iab_gdpr_vendor_id" => 304,
                "adx_gdpr_provider_id" => 2290,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 556,
                "creative_vendor_name" => "1trn",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2292,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 557,
                "creative_vendor_name" => "iBILLBOARD",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2295,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 558,
                "creative_vendor_name" => "Optomaton",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2299,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 559,
                "creative_vendor_name" => "E-Contenta",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2305,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 560,
                "creative_vendor_name" => "Naoplay",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2306,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 561,
                "creative_vendor_name" => "Sift Media",
                "iab_gdpr_vendor_id" => 59,
                "adx_gdpr_provider_id" => 2311,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 562,
                "creative_vendor_name" => "StartApp",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2312,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 563,
                "creative_vendor_name" => "Adzymic",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2315,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 564,
                "creative_vendor_name" => "DeepIntent",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2320,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 565,
                "creative_vendor_name" => "OmniVirt",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2325,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 566,
                "creative_vendor_name" => "Zucks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2331,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 567,
                "creative_vendor_name" => "Conversion Logic",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2334,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 568,
                "creative_vendor_name" => "CollegeHumor",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2335,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 569,
                "creative_vendor_name" => "Louder",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2336,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 570,
                "creative_vendor_name" => "Zuuvi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2337,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 571,
                "creative_vendor_name" => "Viant",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2343,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 572,
                "creative_vendor_name" => "TabMo",
                "iab_gdpr_vendor_id" => 275,
                "adx_gdpr_provider_id" => 2346,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 573,
                "creative_vendor_name" => "Snitcher.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2354,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 574,
                "creative_vendor_name" => "Analights",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2357,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 575,
                "creative_vendor_name" => "ROMIR",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2358,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 576,
                "creative_vendor_name" => "Pi-rate / pubintl",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2359,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 577,
                "creative_vendor_name" => "Addition Plus",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2366,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 578,
                "creative_vendor_name" => "Cauly",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2370,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 579,
                "creative_vendor_name" => "Dentsu Aegis Network",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2373,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 580,
                "creative_vendor_name" => "Millemedia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2376,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 581,
                "creative_vendor_name" => "ProData Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2377,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 582,
                "creative_vendor_name" => "Polytab",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2380,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 583,
                "creative_vendor_name" => "Smartology",
                "iab_gdpr_vendor_id" => 246,
                "adx_gdpr_provider_id" => 2382,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 584,
                "creative_vendor_name" => "Bidease",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2387,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 585,
                "creative_vendor_name" => "Quadas",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2389,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 586,
                "creative_vendor_name" => "22-Visions",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2392,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 587,
                "creative_vendor_name" => "Quple",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2394,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 588,
                "creative_vendor_name" => "Stratio Big Data",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2400,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 589,
                "creative_vendor_name" => "SCIBIDS TECHNOLOGY",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2403,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 590,
                "creative_vendor_name" => "Cortex",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2405,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 591,
                "creative_vendor_name" => "appTV",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2406,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 592,
                "creative_vendor_name" => "ProgSol.cz",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2407,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 593,
                "creative_vendor_name" => "Rezonence",
                "iab_gdpr_vendor_id" => 194,
                "adx_gdpr_provider_id" => 2410,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 594,
                "creative_vendor_name" => "LKQD",
                "iab_gdpr_vendor_id" => 237,
                "adx_gdpr_provider_id" => 2411,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 595,
                "creative_vendor_name" => "MADGIC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2414,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 596,
                "creative_vendor_name" => "Digiseg",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2415,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 597,
                "creative_vendor_name" => "UNICORN",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2416,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 598,
                "creative_vendor_name" => "Wonderbly",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2418,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 599,
                "creative_vendor_name" => "YouGov",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2422,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 600,
                "creative_vendor_name" => "Double Check",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2425,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 601,
                "creative_vendor_name" => "Smart.bid ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2427,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 602,
                "creative_vendor_name" => "RAM",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2435,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 603,
                "creative_vendor_name" => "OneTag",
                "iab_gdpr_vendor_id" => 241,
                "adx_gdpr_provider_id" => 2437,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 604,
                "creative_vendor_name" => "Fiverr",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2440,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 605,
                "creative_vendor_name" => "Adikteev",
                "iab_gdpr_vendor_id" => 15,
                "adx_gdpr_provider_id" => 2441,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 606,
                "creative_vendor_name" => "Pure Cobalt",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2447,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 607,
                "creative_vendor_name" => "Cedato",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2453,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 608,
                "creative_vendor_name" => "Realytics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2459,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 609,
                "creative_vendor_name" => "Twinpine",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2461,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 610,
                "creative_vendor_name" => "Mopedo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2462,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 611,
                "creative_vendor_name" => "NEORY GmbH",
                "iab_gdpr_vendor_id" => 34,
                "adx_gdpr_provider_id" => 2464,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 612,
                "creative_vendor_name" => "Phaistos Networks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2467,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 613,
                "creative_vendor_name" => "Maelico LTD",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2468,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 614,
                "creative_vendor_name" => "GroundhogTech",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2472,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 615,
                "creative_vendor_name" => "FlixMobility",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2474,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 616,
                "creative_vendor_name" => "Netscore",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2477,
                "adx_vendor_approval_id" => 889
            ],
            [
                "creative_vendor_id" => 617,
                "creative_vendor_name" => "Ve Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2481,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 618,
                "creative_vendor_name" => "Whichit UK Ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2486,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 619,
                "creative_vendor_name" => "Vuble",
                "iab_gdpr_vendor_id" => 339,
                "adx_gdpr_provider_id" => 2492,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 620,
                "creative_vendor_name" => "adlocal.net",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2493,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 621,
                "creative_vendor_name" => "DServe",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2496,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 622,
                "creative_vendor_name" => "Freckle IoT",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2497,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 623,
                "creative_vendor_name" => "REES46",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2498,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 624,
                "creative_vendor_name" => "ThoughtLeadr",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2499,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 625,
                "creative_vendor_name" => "Cuebiq",
                "iab_gdpr_vendor_id" => 298,
                "adx_gdpr_provider_id" => 2504,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 627,
                "creative_vendor_name" => "KAYAK",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2510,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 628,
                "creative_vendor_name" => "Advmaker",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2511,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 629,
                "creative_vendor_name" => "VRTCAL",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2512,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 630,
                "creative_vendor_name" => "NativeAds.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2517,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 631,
                "creative_vendor_name" => "BDSK Handels GmbH & Co. KG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2526,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 632,
                "creative_vendor_name" => "RIESENIA.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2527,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 633,
                "creative_vendor_name" => "Objective Partners",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2531,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 634,
                "creative_vendor_name" => "Airtory",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2532,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 635,
                "creative_vendor_name" => "Spring Venture Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2542,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 636,
                "creative_vendor_name" => "Platform360",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2544,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 637,
                "creative_vendor_name" => "Onseo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2552,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 638,
                "creative_vendor_name" => "Mobvista/Mintegral",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2555,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 639,
                "creative_vendor_name" => "DynAdmic Corporation",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2559,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 640,
                "creative_vendor_name" => "Credebat",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2563,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 641,
                "creative_vendor_name" => "Gruuv Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2564,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 642,
                "creative_vendor_name" => "Supership",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2567,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 643,
                "creative_vendor_name" => "Marketing Science Consulting Group, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2568,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 644,
                "creative_vendor_name" => "Reactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2569,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 645,
                "creative_vendor_name" => "DENTSU",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2571,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 646,
                "creative_vendor_name" => "Downstream.ai",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2572,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 647,
                "creative_vendor_name" => "Essens",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2575,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 648,
                "creative_vendor_name" => "NetSuccess",
                "iab_gdpr_vendor_id" => 48,
                "adx_gdpr_provider_id" => 2579,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 649,
                "creative_vendor_name" => "Nexus Soft",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2583,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 650,
                "creative_vendor_name" => "Giantmedia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2584,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 651,
                "creative_vendor_name" => "GP One",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2586,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 652,
                "creative_vendor_name" => "Parrable",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2595,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 653,
                "creative_vendor_name" => "BannerBuilder",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2596,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 654,
                "creative_vendor_name" => "eMarketingSolutions",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2601,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 655,
                "creative_vendor_name" => "Native Touch",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2604,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 656,
                "creative_vendor_name" => "Branch",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2605,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 657,
                "creative_vendor_name" => "Pathmatics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2609,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 658,
                "creative_vendor_name" => "N2",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2610,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 659,
                "creative_vendor_name" => "Net Info",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2612,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 660,
                "creative_vendor_name" => "Adnetic",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2614,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 661,
                "creative_vendor_name" => "OpinionAds",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2621,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 662,
                "creative_vendor_name" => "Connatix",
                "iab_gdpr_vendor_id" => 143,
                "adx_gdpr_provider_id" => 2622,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 663,
                "creative_vendor_name" => "Widespace",
                "iab_gdpr_vendor_id" => 18,
                "adx_gdpr_provider_id" => 2624,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 664,
                "creative_vendor_name" => "Qualtrics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2628,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 665,
                "creative_vendor_name" => "Advertserve",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2629,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 666,
                "creative_vendor_name" => "Touch Ads",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2634,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 667,
                "creative_vendor_name" => "Softcrylic",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2636,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 668,
                "creative_vendor_name" => "Sape",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2643,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 669,
                "creative_vendor_name" => "AdPlay",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2645,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 670,
                "creative_vendor_name" => "AppGrowth Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2646,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 671,
                "creative_vendor_name" => "Blueworks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2647,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 672,
                "creative_vendor_name" => "Seenthis",
                "iab_gdpr_vendor_id" => 415,
                "adx_gdpr_provider_id" => 2649,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 673,
                "creative_vendor_name" => "Tapklik",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2650,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 674,
                "creative_vendor_name" => "Vertoz",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2651,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 675,
                "creative_vendor_name" => "Sketchfab, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2652,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 676,
                "creative_vendor_name" => "Taiwan Mobile Co Ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2656,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 677,
                "creative_vendor_name" => "Qualia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2657,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 678,
                "creative_vendor_name" => "Alooma",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2658,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 679,
                "creative_vendor_name" => "ListenLoop",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2661,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 680,
                "creative_vendor_name" => "AntVoice",
                "iab_gdpr_vendor_id" => 155,
                "adx_gdpr_provider_id" => 2662,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 681,
                "creative_vendor_name" => "Bombora",
                "iab_gdpr_vendor_id" => 163,
                "adx_gdpr_provider_id" => 2663,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 682,
                "creative_vendor_name" => "Adclouds",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2664,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 683,
                "creative_vendor_name" => "Display.direct",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2669,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 684,
                "creative_vendor_name" => "Amino Payments, Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2670,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 685,
                "creative_vendor_name" => "Interplus",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2673,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 686,
                "creative_vendor_name" => "Stage Flag",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2676,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 687,
                "creative_vendor_name" => "Vimeo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2677,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 688,
                "creative_vendor_name" => "AE Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2678,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 689,
                "creative_vendor_name" => "AdRetarget",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2681,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 690,
                "creative_vendor_name" => "Etu Corporation",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2682,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 691,
                "creative_vendor_name" => "LANDS' END",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2684,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 692,
                "creative_vendor_name" => "Digitec Galaxus AG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2685,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 693,
                "creative_vendor_name" => "Persona.ly",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2686,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 694,
                "creative_vendor_name" => "Lifesight",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2689,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 695,
                "creative_vendor_name" => "Vertriebswerk",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2690,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 696,
                "creative_vendor_name" => "Somplo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2691,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 697,
                "creative_vendor_name" => "TVadSync",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2695,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 698,
                "creative_vendor_name" => "X-Social",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2698,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 699,
                "creative_vendor_name" => "Blue",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2699,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 700,
                "creative_vendor_name" => "Improve Digital",
                "iab_gdpr_vendor_id" => 253,
                "adx_gdpr_provider_id" => 2705,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 701,
                "creative_vendor_name" => "Sovrn",
                "iab_gdpr_vendor_id" => 13,
                "adx_gdpr_provider_id" => 2706,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 702,
                "creative_vendor_name" => "Smaato",
                "iab_gdpr_vendor_id" => 82,
                "adx_gdpr_provider_id" => 2709,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 703,
                "creative_vendor_name" => "AdColony",
                "iab_gdpr_vendor_id" => 458,
                "adx_gdpr_provider_id" => 2710,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 704,
                "creative_vendor_name" => "IOTEC",
                "iab_gdpr_vendor_id" => 113,
                "adx_gdpr_provider_id" => 2739,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 705,
                "creative_vendor_name" => "YieldMo",
                "iab_gdpr_vendor_id" => 173,
                "adx_gdpr_provider_id" => 2758,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 706,
                "creative_vendor_name" => "Dochase",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2765,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 707,
                "creative_vendor_name" => "All In Views LTD",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2766,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 708,
                "creative_vendor_name" => "Hotels.com L. P.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2767,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 709,
                "creative_vendor_name" => "Overstock",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2768,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 710,
                "creative_vendor_name" => "Thomann GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2770,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 711,
                "creative_vendor_name" => "Aedge Performance S.L.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2771,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 712,
                "creative_vendor_name" => "Combell",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2772,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 713,
                "creative_vendor_name" => "Virtual Minds",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2776,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 714,
                "creative_vendor_name" => "Oath",
                "iab_gdpr_vendor_id" => 25,
                "adx_gdpr_provider_id" => 2777,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 715,
                "creative_vendor_name" => "Oracle Data Cloud",
                "iab_gdpr_vendor_id" => 385,
                "adx_gdpr_provider_id" => 2778,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 716,
                "creative_vendor_name" => "WPP",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2779,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 717,
                "creative_vendor_name" => "Publicis Groupe",
                "iab_gdpr_vendor_id" => 226,
                "adx_gdpr_provider_id" => 2780,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 718,
                "creative_vendor_name" => "PMG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2783,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 719,
                "creative_vendor_name" => "Adnami ApS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 4362
            ],
            [
                "creative_vendor_id" => 720,
                "creative_vendor_name" => "Tumri",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 10
            ],
            [
                "creative_vendor_id" => 721,
                "creative_vendor_name" => "BlueKai",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 42
            ],
            [
                "creative_vendor_id" => 722,
                "creative_vendor_name" => "Accuen",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 255
            ],
            [
                "creative_vendor_id" => 723,
                "creative_vendor_name" => "DataLogix",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 267
            ],
            [
                "creative_vendor_id" => 724,
                "creative_vendor_name" => "Research Now Limited",
                "iab_gdpr_vendor_id" => 125,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 284
            ],
            [
                "creative_vendor_id" => 725,
                "creative_vendor_name" => "Avail Intelligence",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 331
            ],
            [
                "creative_vendor_id" => 726,
                "creative_vendor_name" => "Hi-Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 432
            ],
            [
                "creative_vendor_id" => 727,
                "creative_vendor_name" => "Project SunBlock",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 445
            ],
            [
                "creative_vendor_id" => 728,
                "creative_vendor_name" => "Integral Ad Science Firewall",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 474
            ],
            [
                "creative_vendor_id" => 729,
                "creative_vendor_name" => "ComScore (AdXpose): Ad Swapping",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 475
            ],
            [
                "creative_vendor_id" => 730,
                "creative_vendor_name" => "eXelate Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 481
            ],
            [
                "creative_vendor_id" => 731,
                "creative_vendor_name" => "Rutarget / Segmento",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 501
            ],
            [
                "creative_vendor_id" => 732,
                "creative_vendor_name" => "Eyeota Limited",
                "iab_gdpr_vendor_id" => 120,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 529
            ],
            [
                "creative_vendor_id" => 733,
                "creative_vendor_name" => "Bizo Inc",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 542
            ],
            [
                "creative_vendor_id" => 734,
                "creative_vendor_name" => "VisualDNA (Imagini)",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 543
            ],
            [
                "creative_vendor_id" => 735,
                "creative_vendor_name" => "AdYapper",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 550
            ],
            [
                "creative_vendor_id" => 736,
                "creative_vendor_name" => "Experian",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 562
            ],
            [
                "creative_vendor_id" => 737,
                "creative_vendor_name" => "Spark Flow S.A.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 566
            ],
            [
                "creative_vendor_id" => 738,
                "creative_vendor_name" => "Krux Digital",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 575
            ],
            [
                "creative_vendor_id" => 739,
                "creative_vendor_name" => "GET IT Mobile",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 698
            ],
            [
                "creative_vendor_id" => 740,
                "creative_vendor_name" => "adverserve digital advertising services",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 745
            ],
            [
                "creative_vendor_id" => 741,
                "creative_vendor_name" => "Where 2 Get It",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 780
            ],
            [
                "creative_vendor_id" => 742,
                "creative_vendor_name" => "ADmantX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 797
            ],
            [
                "creative_vendor_id" => 743,
                "creative_vendor_name" => "Resonate Networks",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 815
            ],
            [
                "creative_vendor_id" => 744,
                "creative_vendor_name" => "Redbranch",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 818
            ],
            [
                "creative_vendor_id" => 745,
                "creative_vendor_name" => "AmberData LLC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 826
            ],
            [
                "creative_vendor_id" => 746,
                "creative_vendor_name" => "Crutchfield New Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 828
            ],
            [
                "creative_vendor_id" => 747,
                "creative_vendor_name" => "The ADEX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 832
            ],
            [
                "creative_vendor_id" => 748,
                "creative_vendor_name" => "nugg.ad AG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 884
            ],
            [
                "creative_vendor_id" => 749,
                "creative_vendor_name" => "ViewersLogic LTD",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 888
            ],
            [
                "creative_vendor_id" => 750,
                "creative_vendor_name" => "Venatus Media Limited",
                "iab_gdpr_vendor_id" => 26,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 751,
                "creative_vendor_name" => "AdSpirit GmbH",
                "iab_gdpr_vendor_id" => 6,
                "adx_gdpr_provider_id" => 85,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 752,
                "creative_vendor_name" => "Etarget SE",
                "iab_gdpr_vendor_id" => 29,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 753,
                "creative_vendor_name" => "ADITION technologies AG",
                "iab_gdpr_vendor_id" => 39,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 754,
                "creative_vendor_name" => "Vibrant Media Limited",
                "iab_gdpr_vendor_id" => 7,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 755,
                "creative_vendor_name" => "Captify Technologies Limited",
                "iab_gdpr_vendor_id" => 2,
                "adx_gdpr_provider_id" => 2786,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 756,
                "creative_vendor_name" => "Tradelab, SAS",
                "iab_gdpr_vendor_id" => 49,
                "adx_gdpr_provider_id" => 621,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 757,
                "creative_vendor_name" => "Purch Group, Inc.",
                "iab_gdpr_vendor_id" => 35,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 758,
                "creative_vendor_name" => "ShareThis, Inc.",
                "iab_gdpr_vendor_id" => 33,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 759,
                "creative_vendor_name" => "N Technologies Inc.",
                "iab_gdpr_vendor_id" => 20,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 760,
                "creative_vendor_name" => "Madison Logic, Inc.",
                "iab_gdpr_vendor_id" => 55,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 761,
                "creative_vendor_name" => "Sirdata",
                "iab_gdpr_vendor_id" => 53,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 762,
                "creative_vendor_name" => "mPlatform",
                "iab_gdpr_vendor_id" => 98,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 763,
                "creative_vendor_name" => "Justpremium BV",
                "iab_gdpr_vendor_id" => 62,
                "adx_gdpr_provider_id" => 2808,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 764,
                "creative_vendor_name" => "Intent Media, Inc.",
                "iab_gdpr_vendor_id" => 19,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 765,
                "creative_vendor_name" => "Vdopia DBA Chocolate Platform",
                "iab_gdpr_vendor_id" => 43,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 766,
                "creative_vendor_name" => "Sharethrough, Inc",
                "iab_gdpr_vendor_id" => 80,
                "adx_gdpr_provider_id" => 1468,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 767,
                "creative_vendor_name" => "M32 Media Inc",
                "iab_gdpr_vendor_id" => 75,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 768,
                "creative_vendor_name" => "Greenhouse Group BV (with its trademark LemonPI)",
                "iab_gdpr_vendor_id" => 17,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 769,
                "creative_vendor_name" => "GumGum, Inc.",
                "iab_gdpr_vendor_id" => 61,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 770,
                "creative_vendor_name" => "Active Agent AG",
                "iab_gdpr_vendor_id" => 40,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 771,
                "creative_vendor_name" => "Tapad, Inc. ",
                "iab_gdpr_vendor_id" => 89,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 772,
                "creative_vendor_name" => "Skimbit Ltd",
                "iab_gdpr_vendor_id" => 46,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 773,
                "creative_vendor_name" => "adsquare GmbH",
                "iab_gdpr_vendor_id" => 66,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 774,
                "creative_vendor_name" => "Yieldlab AG",
                "iab_gdpr_vendor_id" => 70,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 775,
                "creative_vendor_name" => "Fifty Technology Limited",
                "iab_gdpr_vendor_id" => 100,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 776,
                "creative_vendor_name" => "Hottraffic BV (DMA Institute)",
                "iab_gdpr_vendor_id" => 110,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 777,
                "creative_vendor_name" => "Maytrics GmbH",
                "iab_gdpr_vendor_id" => 112,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 778,
                "creative_vendor_name" => "SlimCut Media SAS",
                "iab_gdpr_vendor_id" => 102,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 779,
                "creative_vendor_name" => "Rich Audience",
                "iab_gdpr_vendor_id" => 108,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 780,
                "creative_vendor_name" => "Avid Media Ltd",
                "iab_gdpr_vendor_id" => 122,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 781,
                "creative_vendor_name" => "Drawbridge, Inc.",
                "iab_gdpr_vendor_id" => 118,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 782,
                "creative_vendor_name" => "Admotion SRL",
                "iab_gdpr_vendor_id" => 74,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 783,
                "creative_vendor_name" => "ConnectAd Realtime GmbH",
                "iab_gdpr_vendor_id" => 138,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 784,
                "creative_vendor_name" => "Ströer SSP GmbH",
                "iab_gdpr_vendor_id" => 136,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 785,
                "creative_vendor_name" => "ShowHeroes GmbH",
                "iab_gdpr_vendor_id" => 111,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 786,
                "creative_vendor_name" => "Confiant Inc.",
                "iab_gdpr_vendor_id" => 56,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 787,
                "creative_vendor_name" => "YOC AG",
                "iab_gdpr_vendor_id" => 154,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 788,
                "creative_vendor_name" => "Beemray Oy",
                "iab_gdpr_vendor_id" => 38,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 789,
                "creative_vendor_name" => "ADman Interactive SL",
                "iab_gdpr_vendor_id" => 149,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 790,
                "creative_vendor_name" => "MADVERTISE MEDIA",
                "iab_gdpr_vendor_id" => 153,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 791,
                "creative_vendor_name" => "Seedtag Advertising S.L",
                "iab_gdpr_vendor_id" => 157,
                "adx_gdpr_provider_id" => 2810,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 792,
                "creative_vendor_name" => "Snapsort Inc., operating as Sortable",
                "iab_gdpr_vendor_id" => 145,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 793,
                "creative_vendor_name" => "ID5 Technology SAS",
                "iab_gdpr_vendor_id" => 131,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 794,
                "creative_vendor_name" => "Reveal Mobile, Inc",
                "iab_gdpr_vendor_id" => 158,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 795,
                "creative_vendor_name" => "IPONWEB GmbH",
                "iab_gdpr_vendor_id" => 129,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 796,
                "creative_vendor_name" => "Outbrain UK Ltd",
                "iab_gdpr_vendor_id" => 164,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 797,
                "creative_vendor_name" => "district m inc.",
                "iab_gdpr_vendor_id" => 144,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 798,
                "creative_vendor_name" => "Sublime Skinz",
                "iab_gdpr_vendor_id" => 114,
                "adx_gdpr_provider_id" => 2802,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 799,
                "creative_vendor_name" => "FORTVISION",
                "iab_gdpr_vendor_id" => 175,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 800,
                "creative_vendor_name" => "digitalAudience",
                "iab_gdpr_vendor_id" => 133,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 801,
                "creative_vendor_name" => "Thirdpresence Oy",
                "iab_gdpr_vendor_id" => 180,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 802,
                "creative_vendor_name" => "EMX Digital LLC",
                "iab_gdpr_vendor_id" => 183,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 803,
                "creative_vendor_name" => "33Across",
                "iab_gdpr_vendor_id" => 58,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 804,
                "creative_vendor_name" => "Goodway Group",
                "iab_gdpr_vendor_id" => 170,
                "adx_gdpr_provider_id" => 228,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 805,
                "creative_vendor_name" => "Unruly Group Limited",
                "iab_gdpr_vendor_id" => 162,
                "adx_gdpr_provider_id" => 510,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 806,
                "creative_vendor_name" => "Media.net",
                "iab_gdpr_vendor_id" => 142,
                "adx_gdpr_provider_id" => 1199,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 807,
                "creative_vendor_name" => "StackAdapt",
                "iab_gdpr_vendor_id" => 238,
                "adx_gdpr_provider_id" => 1801,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 808,
                "creative_vendor_name" => "Tapjoy",
                "iab_gdpr_vendor_id" => 200,
                "adx_gdpr_provider_id" => 1985,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 809,
                "creative_vendor_name" => "Eacnur",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 20,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 810,
                "creative_vendor_name" => "eBay",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 184,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 811,
                "creative_vendor_name" => "Eulerian Technologies",
                "iab_gdpr_vendor_id" => 413,
                "adx_gdpr_provider_id" => 195,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 812,
                "creative_vendor_name" => "Metalyzer",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 322,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 813,
                "creative_vendor_name" => "Parship",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 371,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 814,
                "creative_vendor_name" => "smartclip Holding AG",
                "iab_gdpr_vendor_id" => 115,
                "adx_gdpr_provider_id" => 443,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 815,
                "creative_vendor_name" => "Vizury",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 522,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 816,
                "creative_vendor_name" => "Webgains",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 584,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 817,
                "creative_vendor_name" => "AT Internet",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 587,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 818,
                "creative_vendor_name" => "LiveIntent",
                "iab_gdpr_vendor_id" => 148,
                "adx_gdpr_provider_id" => 780,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 819,
                "creative_vendor_name" => "Reamp",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 787,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 820,
                "creative_vendor_name" => "Zebestof",
                "iab_gdpr_vendor_id" => 234,
                "adx_gdpr_provider_id" => 798,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 821,
                "creative_vendor_name" => "Trend Research",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 803,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 823,
                "creative_vendor_name" => "TraceAd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 904,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 824,
                "creative_vendor_name" => "activecore",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1085,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 825,
                "creative_vendor_name" => "Walmart",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1092,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 826,
                "creative_vendor_name" => "Audience2Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1143,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 827,
                "creative_vendor_name" => "Bidtheatre",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1167,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 828,
                "creative_vendor_name" => "InMobi",
                "iab_gdpr_vendor_id" => 333,
                "adx_gdpr_provider_id" => 1172,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 829,
                "creative_vendor_name" => "Awin",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1317,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 830,
                "creative_vendor_name" => "YDigital Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1440,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 831,
                "creative_vendor_name" => "hbfsTech",
                "iab_gdpr_vendor_id" => 474,
                "adx_gdpr_provider_id" => 1540,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 832,
                "creative_vendor_name" => "TripAdvisor",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1558,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 833,
                "creative_vendor_name" => "Addictive Mobility",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1671,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 834,
                "creative_vendor_name" => "Unitymedia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1697,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 836,
                "creative_vendor_name" => "Takoomi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1769,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 837,
                "creative_vendor_name" => "Bilendi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1776,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 838,
                "creative_vendor_name" => "Momentum",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1827,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 839,
                "creative_vendor_name" => "TAPTAP",
                "iab_gdpr_vendor_id" => 475,
                "adx_gdpr_provider_id" => 1875,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 840,
                "creative_vendor_name" => "Realzeit",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1928,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 841,
                "creative_vendor_name" => "twiago",
                "iab_gdpr_vendor_id" => 242,
                "adx_gdpr_provider_id" => 1945,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 842,
                "creative_vendor_name" => "F Sharp",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1963,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 843,
                "creative_vendor_name" => "Qantas",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1967,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 844,
                "creative_vendor_name" => "AdotMob",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1986,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 845,
                "creative_vendor_name" => "Fraudlogix",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 1998,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 846,
                "creative_vendor_name" => "Ingenious Technologies",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2013,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 847,
                "creative_vendor_name" => "Enbritely",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2047,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 848,
                "creative_vendor_name" => "Bucksense",
                "iab_gdpr_vendor_id" => 235,
                "adx_gdpr_provider_id" => 2062,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 849,
                "creative_vendor_name" => "Oxford BioChronometrics",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2115,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 850,
                "creative_vendor_name" => "Crucial Interactive Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2130,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 851,
                "creative_vendor_name" => "Aniview Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2238,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 852,
                "creative_vendor_name" => "fluct",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2328,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 853,
                "creative_vendor_name" => "Madington",
                "iab_gdpr_vendor_id" => 486,
                "adx_gdpr_provider_id" => 2413,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 854,
                "creative_vendor_name" => "OpenLedger ApS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2484,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 855,
                "creative_vendor_name" => "SPACE ADSERVER",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2534,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 856,
                "creative_vendor_name" => "BidMotion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2573,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 857,
                "creative_vendor_name" => "AppsFlyer",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2577,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 858,
                "creative_vendor_name" => "IgnitionAI",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2589,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 859,
                "creative_vendor_name" => "Instinctive",
                "iab_gdpr_vendor_id" => 265,
                "adx_gdpr_provider_id" => 2597,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 860,
                "creative_vendor_name" => "adrule",
                "iab_gdpr_vendor_id" => 224,
                "adx_gdpr_provider_id" => 2632,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 862,
                "creative_vendor_name" => "Adnami ApS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2702,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 863,
                "creative_vendor_name" => "Ogury Ltd",
                "iab_gdpr_vendor_id" => 31,
                "adx_gdpr_provider_id" => 2704,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 864,
                "creative_vendor_name" => "Vungle",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2707,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 865,
                "creative_vendor_name" => "Tail",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2714,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 866,
                "creative_vendor_name" => "Fyber",
                "iab_gdpr_vendor_id" => 262,
                "adx_gdpr_provider_id" => 2727,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 868,
                "creative_vendor_name" => "Yabbi",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2784,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 869,
                "creative_vendor_name" => "Datafy",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2787,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 870,
                "creative_vendor_name" => "Swaven",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2791,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 871,
                "creative_vendor_name" => "Hashtag'd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2792,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 872,
                "creative_vendor_name" => "SAS One Planet Only",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2793,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 873,
                "creative_vendor_name" => "Better Banners",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2797,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 874,
                "creative_vendor_name" => "True Wave Technologies Limited",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2798,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 875,
                "creative_vendor_name" => "Alion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2801,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 876,
                "creative_vendor_name" => "Artworx AS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2803,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 877,
                "creative_vendor_name" => "Dumarca Gaming Ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2805,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 878,
                "creative_vendor_name" => "Media Lab Limited",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2809,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 879,
                "creative_vendor_name" => "EFICIENS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2812,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 880,
                "creative_vendor_name" => "Rippll Ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2814,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 881,
                "creative_vendor_name" => "Affiliate Future",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2817,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 882,
                "creative_vendor_name" => "Grabit Interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2826,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 883,
                "creative_vendor_name" => "Qriously Inc",
                "iab_gdpr_vendor_id" => 250,
                "adx_gdpr_provider_id" => 2832,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 884,
                "creative_vendor_name" => "FXCM.com",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2834,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 885,
                "creative_vendor_name" => "Rambla",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2838,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 886,
                "creative_vendor_name" => "Tramplin Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => 2840,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 887,
                "creative_vendor_name" => "1020, Inc. dba Placecast and Ericsson Emodo",
                "iab_gdpr_vendor_id" => 141,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 888,
                "creative_vendor_name" => "Switch Concepts Limited",
                "iab_gdpr_vendor_id" => 197,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 889,
                "creative_vendor_name" => "video intelligence AG",
                "iab_gdpr_vendor_id" => 190,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 890,
                "creative_vendor_name" => "Location Sciences AI Ltd",
                "iab_gdpr_vendor_id" => 65,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 891,
                "creative_vendor_name" => "Zemanta, Inc.",
                "iab_gdpr_vendor_id" => 210,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 892,
                "creative_vendor_name" => "SYNC",
                "iab_gdpr_vendor_id" => 198,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 893,
                "creative_vendor_name" => "ORTEC B.V.",
                "iab_gdpr_vendor_id" => 227,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 894,
                "creative_vendor_name" => "Collective Europe Ltd.",
                "iab_gdpr_vendor_id" => 179,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 895,
                "creative_vendor_name" => "1plusX AG",
                "iab_gdpr_vendor_id" => 92,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 896,
                "creative_vendor_name" => "Leadplace - Temelio",
                "iab_gdpr_vendor_id" => 244,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 899,
                "creative_vendor_name" => "Bounce Exchange, Inc",
                "iab_gdpr_vendor_id" => 256,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 900,
                "creative_vendor_name" => "LiquidM Technology GmbH",
                "iab_gdpr_vendor_id" => 254,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 901,
                "creative_vendor_name" => "ARMIS SAS",
                "iab_gdpr_vendor_id" => 215,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 902,
                "creative_vendor_name" => "Audiens S.r.l.",
                "iab_gdpr_vendor_id" => 167,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 903,
                "creative_vendor_name" => "7Hops.com Inc. (ZergNet)",
                "iab_gdpr_vendor_id" => 240,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 905,
                "creative_vendor_name" => "RTK.IO, Inc",
                "iab_gdpr_vendor_id" => 169,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 906,
                "creative_vendor_name" => "AdTheorent, Inc",
                "iab_gdpr_vendor_id" => 211,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 907,
                "creative_vendor_name" => "Digitize New Media Ltd",
                "iab_gdpr_vendor_id" => 229,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 908,
                "creative_vendor_name" => "Bannerflow AB",
                "iab_gdpr_vendor_id" => 273,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 909,
                "creative_vendor_name" => "Sonobi, Inc",
                "iab_gdpr_vendor_id" => 104,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 910,
                "creative_vendor_name" => "Spolecznosci Sp. z o.o. Sp. k.",
                "iab_gdpr_vendor_id" => 249,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 911,
                "creative_vendor_name" => "Netsprint SA",
                "iab_gdpr_vendor_id" => 160,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 912,
                "creative_vendor_name" => "Intowow Innovation Ltd.",
                "iab_gdpr_vendor_id" => 189,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 913,
                "creative_vendor_name" => "Mirando GmbH & Co KG",
                "iab_gdpr_vendor_id" => 279,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 914,
                "creative_vendor_name" => "Sanoma Media Finland",
                "iab_gdpr_vendor_id" => 269,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 915,
                "creative_vendor_name" => "Viralize SRL",
                "iab_gdpr_vendor_id" => 276,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 916,
                "creative_vendor_name" => "Genius Sports Media Limited",
                "iab_gdpr_vendor_id" => 87,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 917,
                "creative_vendor_name" => "Collective, Inc. dba Visto",
                "iab_gdpr_vendor_id" => 182,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 918,
                "creative_vendor_name" => "Onnetwork Sp. z o.o.",
                "iab_gdpr_vendor_id" => 255,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 919,
                "creative_vendor_name" => "Revcontent, LLC",
                "iab_gdpr_vendor_id" => 203,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 920,
                "creative_vendor_name" => "RockYou, Inc.",
                "iab_gdpr_vendor_id" => 260,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 921,
                "creative_vendor_name" => "Golden Bees",
                "iab_gdpr_vendor_id" => 274,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 922,
                "creative_vendor_name" => "Spot.IM Ltd.",
                "iab_gdpr_vendor_id" => 280,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 923,
                "creative_vendor_name" => "Triton Digital Canada Inc.",
                "iab_gdpr_vendor_id" => 239,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 924,
                "creative_vendor_name" => "plista GmbH",
                "iab_gdpr_vendor_id" => 177,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 925,
                "creative_vendor_name" => "Inskin Media LTD",
                "iab_gdpr_vendor_id" => 150,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 926,
                "creative_vendor_name" => "Jaduda GmbH",
                "iab_gdpr_vendor_id" => 252,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 927,
                "creative_vendor_name" => "Converge-Digital",
                "iab_gdpr_vendor_id" => 248,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 928,
                "creative_vendor_name" => "Comcast International France SAS",
                "iab_gdpr_vendor_id" => 285,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 929,
                "creative_vendor_name" => "McCann Discipline LTD",
                "iab_gdpr_vendor_id" => 228,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 930,
                "creative_vendor_name" => "Codewise Sp. z o.o. Sp. k",
                "iab_gdpr_vendor_id" => 277,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 931,
                "creative_vendor_name" => "ADYOULIKE SA",
                "iab_gdpr_vendor_id" => 259,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 932,
                "creative_vendor_name" => "mobalo GmbH",
                "iab_gdpr_vendor_id" => 289,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 933,
                "creative_vendor_name" => "A.Mob",
                "iab_gdpr_vendor_id" => 272,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 934,
                "creative_vendor_name" => "Steel House, Inc.",
                "iab_gdpr_vendor_id" => 230,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 935,
                "creative_vendor_name" => "Keymantics",
                "iab_gdpr_vendor_id" => 314,
                "adx_gdpr_provider_id" => 2666,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 936,
                "creative_vendor_name" => "R-TARGET",
                "iab_gdpr_vendor_id" => 257,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 937,
                "creative_vendor_name" => "Qwertize",
                "iab_gdpr_vendor_id" => 291,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 938,
                "creative_vendor_name" => "ADMAN - Phaistos Networks, S.A.",
                "iab_gdpr_vendor_id" => 47,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 939,
                "creative_vendor_name" => "Gamned",
                "iab_gdpr_vendor_id" => 316,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 940,
                "creative_vendor_name" => "Accorp Sp. z o.o.",
                "iab_gdpr_vendor_id" => 318,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 941,
                "creative_vendor_name" => "ADUX",
                "iab_gdpr_vendor_id" => 199,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 942,
                "creative_vendor_name" => "PowerLinks Media Limited",
                "iab_gdpr_vendor_id" => 236,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 943,
                "creative_vendor_name" => "Polar Mobile Group Inc.",
                "iab_gdpr_vendor_id" => 297,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 944,
                "creative_vendor_name" => "Clipcentric, Inc.",
                "iab_gdpr_vendor_id" => 319,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 945,
                "creative_vendor_name" => "Readpeak Oy",
                "iab_gdpr_vendor_id" => 290,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 946,
                "creative_vendor_name" => "Perform Media Services Ltd",
                "iab_gdpr_vendor_id" => 323,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 947,
                "creative_vendor_name" => "S4M",
                "iab_gdpr_vendor_id" => 119,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 948,
                "creative_vendor_name" => "Mobile Professionals BV",
                "iab_gdpr_vendor_id" => 302,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 949,
                "creative_vendor_name" => "The ADEX GmbH",
                "iab_gdpr_vendor_id" => 44,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 950,
                "creative_vendor_name" => "Welect GmbH",
                "iab_gdpr_vendor_id" => 282,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 951,
                "creative_vendor_name" => "DigiTrust / IAB Tech Lab",
                "iab_gdpr_vendor_id" => 64,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 952,
                "creative_vendor_name" => "zeotap GmbH",
                "iab_gdpr_vendor_id" => 301,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 953,
                "creative_vendor_name" => "Schibsted Classified Media Spain, S.L.",
                "iab_gdpr_vendor_id" => 310,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 954,
                "creative_vendor_name" => "AdTiming Technology Company Limited",
                "iab_gdpr_vendor_id" => 326,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 955,
                "creative_vendor_name" => "ad6media",
                "iab_gdpr_vendor_id" => 331,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 956,
                "creative_vendor_name" => "Rockabox Media Ltd",
                "iab_gdpr_vendor_id" => 308,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 957,
                "creative_vendor_name" => "Marfeel Slutions S.L",
                "iab_gdpr_vendor_id" => 270,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 958,
                "creative_vendor_name" => "Telaria, Inc",
                "iab_gdpr_vendor_id" => 202,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 959,
                "creative_vendor_name" => "Gemius SA",
                "iab_gdpr_vendor_id" => 328,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 960,
                "creative_vendor_name" => "Wizaly",
                "iab_gdpr_vendor_id" => 281,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 961,
                "creative_vendor_name" => "Apester Ltd",
                "iab_gdpr_vendor_id" => 354,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 962,
                "creative_vendor_name" => "Adelphic LLC",
                "iab_gdpr_vendor_id" => 320,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 963,
                "creative_vendor_name" => "Optomaton UG",
                "iab_gdpr_vendor_id" => 349,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 964,
                "creative_vendor_name" => "Video Media Groep B.V.",
                "iab_gdpr_vendor_id" => 288,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 965,
                "creative_vendor_name" => "Digilant Spain, SLU",
                "iab_gdpr_vendor_id" => 266,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 966,
                "creative_vendor_name" => "Orion Semantics",
                "iab_gdpr_vendor_id" => 303,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 967,
                "creative_vendor_name" => "Signal Digital Inc.",
                "iab_gdpr_vendor_id" => 261,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 968,
                "creative_vendor_name" => "Visarity Technologies GmbH",
                "iab_gdpr_vendor_id" => 83,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 969,
                "creative_vendor_name" => "DIGITEKA Technologies",
                "iab_gdpr_vendor_id" => 343,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 970,
                "creative_vendor_name" => "Linicom",
                "iab_gdpr_vendor_id" => 330,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 971,
                "creative_vendor_name" => "Mindlytix SAS",
                "iab_gdpr_vendor_id" => 216,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 972,
                "creative_vendor_name" => "Permutive, Inc.",
                "iab_gdpr_vendor_id" => 360,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 973,
                "creative_vendor_name" => "Onlysix Limited",
                "iab_gdpr_vendor_id" => 361,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 974,
                "creative_vendor_name" => "Matomy Media Ltd.",
                "iab_gdpr_vendor_id" => 311,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 975,
                "creative_vendor_name" => "Yieldlove GmbH",
                "iab_gdpr_vendor_id" => 251,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 976,
                "creative_vendor_name" => "Seeding Alliance GmbH",
                "iab_gdpr_vendor_id" => 371,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 977,
                "creative_vendor_name" => "My6sense Inc.",
                "iab_gdpr_vendor_id" => 344,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 978,
                "creative_vendor_name" => "Ezoic Inc.",
                "iab_gdpr_vendor_id" => 347,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 979,
                "creative_vendor_name" => "Free Stream Media Corp. dba Samba TV",
                "iab_gdpr_vendor_id" => 350,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 980,
                "creative_vendor_name" => "Samba TV UK Limited",
                "iab_gdpr_vendor_id" => 351,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 981,
                "creative_vendor_name" => "realzeit GmbH",
                "iab_gdpr_vendor_id" => 191,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 982,
                "creative_vendor_name" => "Vidoomy Media SL",
                "iab_gdpr_vendor_id" => 380,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 983,
                "creative_vendor_name" => "communicationAds GmbH & Co. KG",
                "iab_gdpr_vendor_id" => 378,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 984,
                "creative_vendor_name" => "VECTAURY",
                "iab_gdpr_vendor_id" => 368,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 985,
                "creative_vendor_name" => "Digital Control GmbH & Co. KG",
                "iab_gdpr_vendor_id" => 214,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 986,
                "creative_vendor_name" => "1000mercis",
                "iab_gdpr_vendor_id" => 388,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 987,
                "creative_vendor_name" => "Audience Trading Platform Ltd.",
                "iab_gdpr_vendor_id" => 223,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 988,
                "creative_vendor_name" => "Triapodi Ltd.",
                "iab_gdpr_vendor_id" => 387,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 989,
                "creative_vendor_name" => "Affectv Ltd",
                "iab_gdpr_vendor_id" => 178,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 990,
                "creative_vendor_name" => "AddApptr GmbH",
                "iab_gdpr_vendor_id" => 377,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 991,
                "creative_vendor_name" => "Hybrid Adtech GmbH",
                "iab_gdpr_vendor_id" => 206,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 992,
                "creative_vendor_name" => "Duplo Media AS",
                "iab_gdpr_vendor_id" => 404,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 993,
                "creative_vendor_name" => "Pocketmath Pte Ltd",
                "iab_gdpr_vendor_id" => 376,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 994,
                "creative_vendor_name" => "Effiliation",
                "iab_gdpr_vendor_id" => 402,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 995,
                "creative_vendor_name" => "Seenergy Netherlands B.V.",
                "iab_gdpr_vendor_id" => 391,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 996,
                "creative_vendor_name" => "Whenever Media Ltd",
                "iab_gdpr_vendor_id" => 400,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 997,
                "creative_vendor_name" => "Webedia",
                "iab_gdpr_vendor_id" => 171,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 998,
                "creative_vendor_name" => "Yormedia Solutions Ltd",
                "iab_gdpr_vendor_id" => 398,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 999,
                "creative_vendor_name" => "Nativo, Inc.",
                "iab_gdpr_vendor_id" => 263,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1000,
                "creative_vendor_name" => "Browsi Mobile Ltd",
                "iab_gdpr_vendor_id" => 329,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1001,
                "creative_vendor_name" => "Parsec Media Inc.",
                "iab_gdpr_vendor_id" => 390,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1002,
                "creative_vendor_name" => "Bidmanagement GmbH",
                "iab_gdpr_vendor_id" => 389,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1003,
                "creative_vendor_name" => "SK Media Group, LLC",
                "iab_gdpr_vendor_id" => 337,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1004,
                "creative_vendor_name" => "Brand Metrics Sweden AB",
                "iab_gdpr_vendor_id" => 422,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1005,
                "creative_vendor_name" => "LeftsnRight, Inc. dba LIQWID",
                "iab_gdpr_vendor_id" => 421,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1006,
                "creative_vendor_name" => "TradeTracker",
                "iab_gdpr_vendor_id" => 426,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1007,
                "creative_vendor_name" => "AudienceProject Aps",
                "iab_gdpr_vendor_id" => 394,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1008,
                "creative_vendor_name" => "Avazu Inc.",
                "iab_gdpr_vendor_id" => 287,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1009,
                "creative_vendor_name" => "dunnhumby Germany GmbH",
                "iab_gdpr_vendor_id" => 338,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1010,
                "creative_vendor_name" => "IgnitionAi Ltd",
                "iab_gdpr_vendor_id" => 405,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1011,
                "creative_vendor_name" => "SINGLESPOT SAS ",
                "iab_gdpr_vendor_id" => 435,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1012,
                "creative_vendor_name" => "Ziff Davis LLC",
                "iab_gdpr_vendor_id" => 321,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1013,
                "creative_vendor_name" => "INVIBES GROUP",
                "iab_gdpr_vendor_id" => 436,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1014,
                "creative_vendor_name" => "R-Advertising",
                "iab_gdpr_vendor_id" => 442,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1015,
                "creative_vendor_name" => "Myntelligence Limited",
                "iab_gdpr_vendor_id" => 362,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1016,
                "creative_vendor_name" => "PROXISTORE",
                "iab_gdpr_vendor_id" => 418,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1017,
                "creative_vendor_name" => "Mobile Journey B.V.",
                "iab_gdpr_vendor_id" => 449,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1018,
                "creative_vendor_name" => "Signals",
                "iab_gdpr_vendor_id" => 429,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1019,
                "creative_vendor_name" => "Beachfront Media LLC",
                "iab_gdpr_vendor_id" => 335,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1020,
                "creative_vendor_name" => "Publishers Internationale Pty Ltd",
                "iab_gdpr_vendor_id" => 407,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1021,
                "creative_vendor_name" => "Proxi.cloud Sp. z o.o.",
                "iab_gdpr_vendor_id" => 427,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1022,
                "creative_vendor_name" => "Bmind a Sales Maker Company, S.L.",
                "iab_gdpr_vendor_id" => 374,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1023,
                "creative_vendor_name" => "Ooyala Inc",
                "iab_gdpr_vendor_id" => 438,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1024,
                "creative_vendor_name" => "Playbuzz Ltd. ",
                "iab_gdpr_vendor_id" => 444,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1025,
                "creative_vendor_name" => "Cxense ASA",
                "iab_gdpr_vendor_id" => 412,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1026,
                "creative_vendor_name" => "Adimo",
                "iab_gdpr_vendor_id" => 454,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1027,
                "creative_vendor_name" => "GDMServices, Inc. d/b/a FiksuDSP",
                "iab_gdpr_vendor_id" => 455,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1028,
                "creative_vendor_name" => "Solocal",
                "iab_gdpr_vendor_id" => 381,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1029,
                "creative_vendor_name" => "ADRINO Sp. z o.o.",
                "iab_gdpr_vendor_id" => 425,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1030,
                "creative_vendor_name" => "Forensiq LLC",
                "iab_gdpr_vendor_id" => 365,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1031,
                "creative_vendor_name" => "PREX Programmatic Exchange GmbH&Co KG",
                "iab_gdpr_vendor_id" => 395,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1032,
                "creative_vendor_name" => "bidstack ltd",
                "iab_gdpr_vendor_id" => 462,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1033,
                "creative_vendor_name" => "uppr GmbH",
                "iab_gdpr_vendor_id" => 459,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1034,
                "creative_vendor_name" => "Ad Unity Ltd",
                "iab_gdpr_vendor_id" => 430,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1035,
                "creative_vendor_name" => "Cybba, Inc.",
                "iab_gdpr_vendor_id" => 346,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1036,
                "creative_vendor_name" => "Zeta Global",
                "iab_gdpr_vendor_id" => 469,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1037,
                "creative_vendor_name" => "DEFINE MEDIA GMBH",
                "iab_gdpr_vendor_id" => 440,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1038,
                "creative_vendor_name" => "RevX Inc.",
                "iab_gdpr_vendor_id" => 375,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1039,
                "creative_vendor_name" => "Social Tokens Ltd. ",
                "iab_gdpr_vendor_id" => 268,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1040,
                "creative_vendor_name" => "TARGETSPOT BELGIUM SPRL",
                "iab_gdpr_vendor_id" => 448,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1041,
                "creative_vendor_name" => "Internet BillBoard a.s.",
                "iab_gdpr_vendor_id" => 428,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1042,
                "creative_vendor_name" => "B2B Media Group EMEA GmbH",
                "iab_gdpr_vendor_id" => 461,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1043,
                "creative_vendor_name" => "HIRO Media Ltd",
                "iab_gdpr_vendor_id" => 476,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1044,
                "creative_vendor_name" => "pilotx.tv",
                "iab_gdpr_vendor_id" => 480,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1045,
                "creative_vendor_name" => "CerebroAd.com s.r.o.",
                "iab_gdpr_vendor_id" => 366,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1046,
                "creative_vendor_name" => "Ströer Mobile Performance GmbH",
                "iab_gdpr_vendor_id" => 392,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1047,
                "creative_vendor_name" => "LEMO MEDIA GROUP LIMITED",
                "iab_gdpr_vendor_id" => 221,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1048,
                "creative_vendor_name" => "RevLifter Ltd",
                "iab_gdpr_vendor_id" => 478,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1049,
                "creative_vendor_name" => "YellowHammer Media Group",
                "iab_gdpr_vendor_id" => 489,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1050,
                "creative_vendor_name" => "Clicksco Digital Limited",
                "iab_gdpr_vendor_id" => 493,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1051,
                "creative_vendor_name" => "Arcspire Limited",
                "iab_gdpr_vendor_id" => 495,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1052,
                "creative_vendor_name" => "Automattic Inc.",
                "iab_gdpr_vendor_id" => 496,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1053,
                "creative_vendor_name" => "KUPONA GmbH",
                "iab_gdpr_vendor_id" => 424,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1054,
                "creative_vendor_name" => "FM Labs LLC",
                "iab_gdpr_vendor_id" => 408,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1055,
                "creative_vendor_name" => "Sub2 Technologies Ltd",
                "iab_gdpr_vendor_id" => 473,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1056,
                "creative_vendor_name" => "Opinary GmbH",
                "iab_gdpr_vendor_id" => 488,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1057,
                "creative_vendor_name" => "PLAYGROUND XYZ EMEA LTD",
                "iab_gdpr_vendor_id" => 490,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1058,
                "creative_vendor_name" => "Oracle AddThis",
                "iab_gdpr_vendor_id" => 464,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1059,
                "creative_vendor_name" => "Triboo Data Analytics",
                "iab_gdpr_vendor_id" => 491,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1060,
                "creative_vendor_name" => "PurposeLab, LLC",
                "iab_gdpr_vendor_id" => 499,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1061,
                "creative_vendor_name" => "Turbo",
                "iab_gdpr_vendor_id" => 500,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1808
            ],
            [
                "creative_vendor_id" => 1062,
                "creative_vendor_name" => "Schibsted Product and Tech UK",
                "iab_gdpr_vendor_id" => 465,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1063,
                "creative_vendor_name" => "Little Big Data sp.z.o.o.",
                "iab_gdpr_vendor_id" => 497,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1064,
                "creative_vendor_name" => "LotaData, Inc.",
                "iab_gdpr_vendor_id" => 492,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1065,
                "creative_vendor_name" => "Lucid Holdings, LLC",
                "iab_gdpr_vendor_id" => 508,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1066,
                "creative_vendor_name" => "PubNative GmbH",
                "iab_gdpr_vendor_id" => 512,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1067,
                "creative_vendor_name" => "FlexOffers.com, LLC",
                "iab_gdpr_vendor_id" => 471,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1068,
                "creative_vendor_name" => "Pexi B.V.",
                "iab_gdpr_vendor_id" => 516,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2843
            ],
            [
                "creative_vendor_id" => 1069,
                "creative_vendor_name" => "AdsWizz Inc.",
                "iab_gdpr_vendor_id" => 507,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1070,
                "creative_vendor_name" => "UberMedia, Inc.",
                "iab_gdpr_vendor_id" => 482,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1071,
                "creative_vendor_name" => "Shopalyst Inc",
                "iab_gdpr_vendor_id" => 505,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1072,
                "creative_vendor_name" => "SunMedia ",
                "iab_gdpr_vendor_id" => 517,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1073,
                "creative_vendor_name" => "Accelerize Inc.",
                "iab_gdpr_vendor_id" => 518,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1074,
                "creative_vendor_name" => "Admixer EU GmbH",
                "iab_gdpr_vendor_id" => 511,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1075,
                "creative_vendor_name" => "Shopstyle",
                "iab_gdpr_vendor_id" => 513,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1076,
                "creative_vendor_name" => "ATG Ad Tech Group GmbH",
                "iab_gdpr_vendor_id" => 509,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1077,
                "creative_vendor_name" => "netzeffekt GmbH",
                "iab_gdpr_vendor_id" => 521,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1078,
                "creative_vendor_name" => "nugg.ad GmbH",
                "iab_gdpr_vendor_id" => 487,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1079,
                "creative_vendor_name" => "ZighZag",
                "iab_gdpr_vendor_id" => 515,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1080,
                "creative_vendor_name" => "ChannelSight ",
                "iab_gdpr_vendor_id" => 520,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1081,
                "creative_vendor_name" => "The Ozone Project Limited",
                "iab_gdpr_vendor_id" => 524,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1082,
                "creative_vendor_name" => "Fidzup",
                "iab_gdpr_vendor_id" => 529,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1083,
                "creative_vendor_name" => "AppLift GmbH",
                "iab_gdpr_vendor_id" => 528,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1084,
                "creative_vendor_name" => "salesforce.com, inc.",
                "iab_gdpr_vendor_id" => 506,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1085,
                "creative_vendor_name" => "SmartyAds Inc.",
                "iab_gdpr_vendor_id" => 534,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1086,
                "creative_vendor_name" => "Uprival LLC",
                "iab_gdpr_vendor_id" => 514,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2864
            ],
            [
                "creative_vendor_id" => 1087,
                "creative_vendor_name" => "Near Pte Ltd",
                "iab_gdpr_vendor_id" => 530,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1088,
                "creative_vendor_name" => "AdDefend GmbH",
                "iab_gdpr_vendor_id" => 539,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1089,
                "creative_vendor_name" => "Alliance Gravity Data Media",
                "iab_gdpr_vendor_id" => 501,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1090,
                "creative_vendor_name" => "Chargeads",
                "iab_gdpr_vendor_id" => 519,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1091,
                "creative_vendor_name" => "X-Mode Social, Inc.",
                "iab_gdpr_vendor_id" => 523,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1092,
                "creative_vendor_name" => "RUN, Inc.",
                "iab_gdpr_vendor_id" => 537,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1093,
                "creative_vendor_name" => "Smartclip Hispania SL",
                "iab_gdpr_vendor_id" => 531,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1094,
                "creative_vendor_name" => "Densou Trading Desk ApS",
                "iab_gdpr_vendor_id" => 542,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1095,
                "creative_vendor_name" => "PUB OCEAN LIMITED",
                "iab_gdpr_vendor_id" => 525,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1096,
                "creative_vendor_name" => "Digilant",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 39
            ],
            [
                "creative_vendor_id" => 1097,
                "creative_vendor_name" => "direct interactive",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 117
            ],
            [
                "creative_vendor_id" => 1098,
                "creative_vendor_name" => "iProspect",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 272
            ],
            [
                "creative_vendor_id" => 1099,
                "creative_vendor_name" => "TravelClick",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 491
            ],
            [
                "creative_vendor_id" => 1100,
                "creative_vendor_name" => "Reklam Store",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 973
            ],
            [
                "creative_vendor_id" => 1101,
                "creative_vendor_name" => "Outbrain Inc.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1025
            ],
            [
                "creative_vendor_id" => 1102,
                "creative_vendor_name" => "ORTEC | adscience",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1062
            ],
            [
                "creative_vendor_id" => 1103,
                "creative_vendor_name" => "ADman Media",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1336
            ],
            [
                "creative_vendor_id" => 1104,
                "creative_vendor_name" => "Kupona",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1542
            ],
            [
                "creative_vendor_id" => 1105,
                "creative_vendor_name" => "LeadBolt",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1616
            ],
            [
                "creative_vendor_id" => 1106,
                "creative_vendor_name" => "ChannelAdvisor",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1838
            ],
            [
                "creative_vendor_id" => 1107,
                "creative_vendor_name" => "TF1 - FR",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1842
            ],
            [
                "creative_vendor_id" => 1108,
                "creative_vendor_name" => "Fospha",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2007
            ],
            [
                "creative_vendor_id" => 1109,
                "creative_vendor_name" => "Atedra",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2488
            ],
            [
                "creative_vendor_id" => 1110,
                "creative_vendor_name" => "Cheetah Mobile",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2535
            ],
            [
                "creative_vendor_id" => 1111,
                "creative_vendor_name" => "Fresh8 Gaming",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2713
            ],
            [
                "creative_vendor_id" => 1112,
                "creative_vendor_name" => "WaardeX",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2811
            ],
            [
                "creative_vendor_id" => 1113,
                "creative_vendor_name" => "Barometric",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2813
            ],
            [
                "creative_vendor_id" => 1114,
                "creative_vendor_name" => "lead alliance GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2818
            ],
            [
                "creative_vendor_id" => 1115,
                "creative_vendor_name" => "Lucidity",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2824
            ],
            [
                "creative_vendor_id" => 1116,
                "creative_vendor_name" => "Journey by CAKE",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2827
            ],
            [
                "creative_vendor_id" => 1117,
                "creative_vendor_name" => "zeotap",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2829
            ],
            [
                "creative_vendor_id" => 1118,
                "creative_vendor_name" => "LivePartners",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2830
            ],
            [
                "creative_vendor_id" => 1119,
                "creative_vendor_name" => "Coastal Digital Group",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2831
            ],
            [
                "creative_vendor_id" => 1120,
                "creative_vendor_name" => "Instant Ads",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2836
            ],
            [
                "creative_vendor_id" => 1121,
                "creative_vendor_name" => "Digital Ad Systems, Corp.",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2839
            ],
            [
                "creative_vendor_id" => 1122,
                "creative_vendor_name" => "EASY Marketing GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2842
            ],
            [
                "creative_vendor_id" => 1123,
                "creative_vendor_name" => "R.O.EYE Limited",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2844
            ],
            [
                "creative_vendor_id" => 1124,
                "creative_vendor_name" => "Milanoo",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2846
            ],
            [
                "creative_vendor_id" => 1125,
                "creative_vendor_name" => "Dynamic 1001 GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2847
            ],
            [
                "creative_vendor_id" => 1126,
                "creative_vendor_name" => "Hargreaves Lansdown",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2850
            ],
            [
                "creative_vendor_id" => 1127,
                "creative_vendor_name" => "Zoekhelden",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2851
            ],
            [
                "creative_vendor_id" => 1128,
                "creative_vendor_name" => "Bauhof Group AS",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2852
            ],
            [
                "creative_vendor_id" => 1129,
                "creative_vendor_name" => "Retail Rocket LLC",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2854
            ],
            [
                "creative_vendor_id" => 1130,
                "creative_vendor_name" => "JYSK LINNENN FURNITURE OÜ",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2860
            ],
            [
                "creative_vendor_id" => 1131,
                "creative_vendor_name" => "Bluesummit",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2862
            ],
            [
                "creative_vendor_id" => 1132,
                "creative_vendor_name" => "xCheck",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2863
            ],
            [
                "creative_vendor_id" => 1133,
                "creative_vendor_name" => "Butlers GmbH & Co . KG",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2865
            ],
            [
                "creative_vendor_id" => 1134,
                "creative_vendor_name" => "Firstlead GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2866
            ],
            [
                "creative_vendor_id" => 1135,
                "creative_vendor_name" => "Bose",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2867
            ],
            [
                "creative_vendor_id" => 1136,
                "creative_vendor_name" => "PLAYGROUND XYZ",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2868
            ],
            [
                "creative_vendor_id" => 1137,
                "creative_vendor_name" => "Throtle",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2869
            ],
            [
                "creative_vendor_id" => 1138,
                "creative_vendor_name" => "Snapupp Technologies SL",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2872
            ],
            [
                "creative_vendor_id" => 1139,
                "creative_vendor_name" => "Red Cubes Ltd",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2873
            ],
            [
                "creative_vendor_id" => 1140,
                "creative_vendor_name" => "Tchibo GmbH",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2874
            ],
            [
                "creative_vendor_id" => 1141,
                "creative_vendor_name" => "Astromotion",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2875
            ],
            [
                "creative_vendor_id" => 1142,
                "creative_vendor_name" => "Spoooky",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2876
            ],
            [
                "creative_vendor_id" => 1143,
                "creative_vendor_name" => "ironSource Mobile",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2878
            ],
            [
                "creative_vendor_id" => 1144,
                "creative_vendor_name" => "TogetherData",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2879
            ],
            [
                "creative_vendor_id" => 1145,
                "creative_vendor_name" => "NETBET",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2880
            ],
            [
                "creative_vendor_id" => 1146,
                "creative_vendor_name" => "ETERNA",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2881
            ],
            [
                "creative_vendor_id" => 1147,
                "creative_vendor_name" => "Amp . ai by Scaled Inference",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2884
            ],
            [
                "creative_vendor_id" => 1148,
                "creative_vendor_name" => "Calzedonia",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2886
            ],
            [
                "creative_vendor_id" => 1149,
                "creative_vendor_name" => "modellbau universe GbR",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2888
            ],
            [
                "creative_vendor_id" => 1150,
                "creative_vendor_name" => "Medialabs",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2889
            ],
            [
                "creative_vendor_id" => 1151,
                "creative_vendor_name" => "Nordisk Film A / S",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2891
            ],
            [
                "creative_vendor_id" => 1152,
                "creative_vendor_name" => "Adhese",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2892
            ],
            [
                "creative_vendor_id" => 1153,
                "creative_vendor_name" => "Advrtas",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2893
            ],
            [
                "creative_vendor_id" => 1154,
                "creative_vendor_name" => "Viewst",
                "iab_gdpr_vendor_id" => null,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2894
            ],
            [
                "creative_vendor_id" => 1155,
                "creative_vendor_name" => "The Reach Group",
                "iab_gdpr_vendor_id" => 382,
                "adx_gdpr_provider_id" => 874,
                "adx_vendor_approval_id" => 814
            ],
            [
                "creative_vendor_id" => 1156,
                "creative_vendor_name" => "Jampp",
                "iab_gdpr_vendor_id" => 527,
                "adx_gdpr_provider_id" => 1760,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1157,
                "creative_vendor_name" => "INFINIA",
                "iab_gdpr_vendor_id" => 479,
                "adx_gdpr_provider_id" => 2639,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1158,
                "creative_vendor_name" => "TotalJobs Group Ltd",
                "iab_gdpr_vendor_id" => 357,
                "adx_gdpr_provider_id" => 2729,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1159,
                "creative_vendor_name" => "A Million Ads Limited",
                "iab_gdpr_vendor_id" => 174,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 2858
            ],
            [
                "creative_vendor_id" => 1160,
                "creative_vendor_name" => "Rockerbox, Inc",
                "iab_gdpr_vendor_id" => 232,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1465
            ],
            [
                "creative_vendor_id" => 1161,
                "creative_vendor_name" => "Bidtellect, Inc",
                "iab_gdpr_vendor_id" => 185,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => 1741
            ],
            [
                "creative_vendor_id" => 1162,
                "creative_vendor_name" => "Innity",
                "iab_gdpr_vendor_id" => 535,
                "adx_gdpr_provider_id" => 255,
                "adx_vendor_approval_id" => 469
            ],
            [
                "creative_vendor_id" => 1163,
                "creative_vendor_name" => "GlobalWebIndex",
                "iab_gdpr_vendor_id" => 536,
                "adx_gdpr_provider_id" => 1705,
                "adx_vendor_approval_id" => 704
            ],
            [
                "creative_vendor_id" => 1164,
                "creative_vendor_name" => "Cablato",
                "iab_gdpr_vendor_id" => 494,
                "adx_gdpr_provider_id" => 1878,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1165,
                "creative_vendor_name" => "Tealium",
                "iab_gdpr_vendor_id" => 522,
                "adx_gdpr_provider_id" => 1911,
                "adx_vendor_approval_id" => 616
            ],
            [
                "creative_vendor_id" => 1166,
                "creative_vendor_name" => "NEXD",
                "iab_gdpr_vendor_id" => 502,
                "adx_gdpr_provider_id" => 2247,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1167,
                "creative_vendor_name" => "Haensel AMS",
                "iab_gdpr_vendor_id" => 467,
                "adx_gdpr_provider_id" => 2506,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1168,
                "creative_vendor_name" => "6sense",
                "iab_gdpr_vendor_id" => 740,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1169,
                "creative_vendor_name" => "Dailymotion",
                "iab_gdpr_vendor_id" => 573,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1170,
                "creative_vendor_name" => "Telefonica Investigación y Desarrollo S . A . U",
                "iab_gdpr_vendor_id" => 650,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1171,
                "creative_vendor_name" => "Discover - Tech ltd",
                "iab_gdpr_vendor_id" => 778,
                "adx_gdpr_provider_id" => 3036,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1172,
                "creative_vendor_name" => "Audiomob",
                "iab_gdpr_vendor_id" => 748,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1173,
                "creative_vendor_name" => "Mars Inc . ",
                "iab_gdpr_vendor_id" => 1042,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1174,
                "creative_vendor_name" => "Squared SAS",
                "iab_gdpr_vendor_id" => 912,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1175,
                "creative_vendor_name" => "Happydemics",
                "iab_gdpr_vendor_id" => 550,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1176,
                "creative_vendor_name" => "Alphonso Inc",
                "iab_gdpr_vendor_id" => 1154,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1177,
                "creative_vendor_name" => "Grabit Interactive Media Inc dba KERV Interctive",
                "iab_gdpr_vendor_id" => 765,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1178,
                "creative_vendor_name" => "AccountInsight",
                "iab_gdpr_vendor_id" => 1187,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1179,
                "creative_vendor_name" => "AdsMovil",
                "iab_gdpr_vendor_id" => 1191,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ],
            [
                "creative_vendor_id" => 1180,
                "creative_vendor_name" => "AIDEM",
                "iab_gdpr_vendor_id" => 1218,
                "adx_gdpr_provider_id" => null,
                "adx_vendor_approval_id" => null
            ]
        ];

        TechnicalVendor::query()->insert($vendors);
    }
}
