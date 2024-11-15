<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $directory = base_path('app/SeedData/Inventories');
        $files = glob($directory . '/inventories-*.php');

        foreach ($files as $file) {
            $records = include $file;

            foreach ($records as $record) {
                unset($record->id);
            }

            // avoid stdClass to string conversion error
            $records = json_decode(json_encode($records), true);
            $records = array_map(function ($record) {
                return array_intersect_key($record, array_flip((new Inventory())->getFillable()));
            }, $records);

            $chunks = array_chunk($records, 500);

            foreach ($chunks as $chunk) {
                Inventory::insert($chunk);
            }
        }
    }
}
