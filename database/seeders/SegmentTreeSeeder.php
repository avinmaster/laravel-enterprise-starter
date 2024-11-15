<?php

namespace Database\Seeders;

use App\Models\SegmentTree;
use Illuminate\Database\Seeder;

class SegmentTreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $directory = base_path('app/SeedData/SegmentTrees');
        $files = glob($directory . '/segment_trees-*.php');

        foreach ($files as $file) {
            $records = include $file;

            foreach ($records as $record) {
                unset($record->id);
            }

            // avoid stdClass to string conversion error
            $records = array_map(function ($record) {
                return array_intersect_key($record, array_flip((new SegmentTree())->getFillable()));
            }, $records);

            $chunks = array_chunk($records, 500);

            foreach ($chunks as $chunk) {
                SegmentTree::insert($chunk);
            }
        }
    }
}
