<?php

namespace Database\Seeders\Tracker\Event;

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
            [ 'code' => 'FESTIVAL', 'name' => 'Festival', 'position' => 10 ],
            [ 'code' => 'CONFERENCE', 'name' => 'Conference', 'position' => 20 ],
        ];

        DB::table('event_types')->insert($eventTypes);
    }
}
