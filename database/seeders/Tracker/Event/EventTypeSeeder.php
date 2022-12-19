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
        $position = 0;
        $types = [
            [ 'code' => 'FESTIVAL', 'name' => 'Festival', 'position' => $position += 10 ],
            [ 'code' => 'CONFERENCE', 'name' => 'Conference', 'position' => $position += 10 ],
        ];

        DB::table('event_types')->insert($types);
    }
}
