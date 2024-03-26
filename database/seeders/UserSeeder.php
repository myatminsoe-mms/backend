<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // then seed
        DB::table('users')->insert([
            ['id' => 1, 'username' => 'superadmin', 'password' => Hash::make('abcdefgh'), 'full_name' => 'Super Administrator', 'title' => 'Title', 'role_id' => 1, 'status' => 'Active'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
