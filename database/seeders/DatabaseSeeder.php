<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            PermissionsSeeder::class,
            CurrenciesSeeder::class,
            AdvertiserCategoriesSeeder::class,
            ContinentsSeeder::class,
            CreativeTemplatesSeeder::class,
            CreativeAddonsSeeder::class,
            CreativeVendorSeeder::class,
            VendorsSeeder::class,
            BandwidthsSeeder::class,
            BrowserSeeder::class,
            BrowserVersionSeeder::class,
            CarrierSeeder::class,
            DeviceMakeSeeder::class,
            DeviceModelSeeder::class,
            OperatingSystemVersionSeeder::class,
            CitiesSeeder::class,
            CountriesSeeder::class,
            ListsSeeder::class,
            MetrosSeeder::class,
            RegionsSeeder::class,
            AdSeeder::class,
            AdPositionsSeeder::class,
            ApiFrameworkSeeder::class,
            BannerAdTypesSeeder::class,
            CreativeAttributeSeeder::class,
            InventorySourceSeeder::class,
            LanguageSeeder::class,
            DataProviderSeeder::class,
            TimezoneSeeder::class,
            SegmentTreeSeeder::class,
            AppSeeder::class,
            InventorySeeder::class,
            CreativeSizeSeeder::class,
        ]);
    }
}
