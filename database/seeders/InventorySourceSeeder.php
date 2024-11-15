<?php

namespace Database\Seeders;

use App\Models\InventorySource;
use Illuminate\Database\Seeder;

class InventorySourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $directory = base_path('app/SeedData/InventorySources');
        $files = glob($directory . '/inventory_sources-*.php');

        foreach ($files as $file) {
            $records = include $file;

            foreach ($records as $record) {
                unset($record->id);
            }

            // avoid stdClass to string conversion error
            $records = array_map(function ($record) {
                return array_intersect_key($record, array_flip((new InventorySource())->getFillable()));
            }, $records);

            $chunks = array_chunk($records, 500);

            foreach ($chunks as $chunk) {
                InventorySource::insert($chunk);
            }
        }
    }
}
