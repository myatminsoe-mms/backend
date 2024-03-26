<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // then seed
        DB::table('tags')->insert([
            ['id' => 1, 'name' => 'Featured', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 2, 'name' => 'Trending', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 3, 'name' => 'Upcoming', 'created_by' => 1, 'updated_by' => 1],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
