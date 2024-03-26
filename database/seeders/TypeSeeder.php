<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // then seed
        DB::table('types')->insert([
            ['id' => 1, 'name' => 'Seminar', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 2, 'name' => 'Networking', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 3, 'name' => 'Workshops', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 4, 'name' => 'Conferences', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 5, 'name' => 'Concerts', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 6, 'name' => 'Performance', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 7, 'name' => 'Festival', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 8, 'name' => 'Tournament', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 9, 'name' => 'Party', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 10, 'name' => 'Social Gathering', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 11, 'name' => 'Trade Fairs', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 12, 'name' => 'Meetups', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 13, 'name' => 'Product Launches', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 14, 'name' => 'Rallies', 'created_by' => 1, 'updated_by' => 1],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
