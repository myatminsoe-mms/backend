<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // then seed
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Entertainment', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 2, 'name' => 'Sports', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 3, 'name' => 'Professional', 'created_by' => 1, 'updated_by' => 1],
            ['id' => 4, 'name' => 'Lifestyle', 'created_by' => 1, 'updated_by' => 1],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
