<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $eventTypes = [
            [ 'code' => 'FESTIVAL', 'name' => 'Festival' ],
            [ 'code' => 'CONFERENCE', 'name' => 'Conference' ],
        ];

        DB::table('event_types')->insert($eventTypes);
    }
}
