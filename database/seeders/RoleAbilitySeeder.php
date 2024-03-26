<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // empty data first
        DB::table('role_abilities')->truncate();

        // then seed
        DB::table('role_abilities')->insert([
            ['id' => 1, 'role_id' => 1, 'ability_id' => 1],
            ['id' => 2, 'role_id' => 1, 'ability_id' => 2],
            ['id' => 3, 'role_id' => 1, 'ability_id' => 3],
            ['id' => 4, 'role_id' => 1, 'ability_id' => 4],
            ['id' => 5, 'role_id' => 1, 'ability_id' => 5],
            ['id' => 6, 'role_id' => 1, 'ability_id' => 6],
            ['id' => 7, 'role_id' => 1, 'ability_id' => 7],
            ['id' => 8, 'role_id' => 1, 'ability_id' => 8],
            ['id' => 9, 'role_id' => 1, 'ability_id' => 9],
            ['id' => 10, 'role_id' => 1, 'ability_id' => 10],
            ['id' => 11, 'role_id' => 1, 'ability_id' => 11],
            ['id' => 12, 'role_id' => 1, 'ability_id' => 12],
            ['id' => 13, 'role_id' => 1, 'ability_id' => 13],
            ['id' => 14, 'role_id' => 1, 'ability_id' => 14],
            ['id' => 15, 'role_id' => 1, 'ability_id' => 15],
            ['id' => 16, 'role_id' => 1, 'ability_id' => 16],
            ['id' => 17, 'role_id' => 1, 'ability_id' => 17],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
