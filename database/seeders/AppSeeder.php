<?php

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $directory = base_path('app/SeedData/Apps');
        $files = glob($directory . '/apps-*.php');

        foreach ($files as $file) {
            $records = include $file;

            foreach ($records as $record) {
                unset($record->id);
            }

            // avoid stdClass to string conversion error
            $records = array_map(function ($record) {
                return (array)$record;
            }, $records);

            $chunks = array_chunk($records, 500);

            foreach ($chunks as $chunk) {
                App::insert($chunk);
            }
        }
    }
}
