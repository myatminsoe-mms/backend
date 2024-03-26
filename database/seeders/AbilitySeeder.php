<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
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
        DB::table('abilities')->truncate();

        // then seed
        DB::table('abilities')->insert([
            ['id' => 1, 'action' => 'index', 'subject' => 'Dashboard'],
            ['id' => 2, 'action' => 'index', 'subject' => 'User'],
            ['id' => 3, 'action' => 'create', 'subject' => 'User'],
            ['id' => 4, 'action' => 'read', 'subject' => 'User'],
            ['id' => 5, 'action' => 'update', 'subject' => 'User'],
            ['id' => 6, 'action' => 'delete', 'subject' => 'User'],
            ['id' => 7, 'action' => 'index', 'subject' => 'Organizer'],
            ['id' => 8, 'action' => 'create', 'subject' => 'Organizer'],
            ['id' => 9, 'action' => 'read', 'subject' => 'Organizer'],
            ['id' => 10, 'action' => 'update', 'subject' => 'Organizer'],
            ['id' => 11, 'action' => 'delete', 'subject' => 'Organizer'],
            ['id' => 12, 'action' => 'index', 'subject' => 'Event'],
            ['id' => 13, 'action' => 'create', 'subject' => 'Event'],
            ['id' => 14, 'action' => 'read', 'subject' => 'Event'],
            ['id' => 15, 'action' => 'update', 'subject' => 'Event'],
            ['id' => 16, 'action' => 'deactivate', 'subject' => 'Event'],
            ['id' => 17, 'action' => 'delete', 'subject' => 'EventTicket'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
