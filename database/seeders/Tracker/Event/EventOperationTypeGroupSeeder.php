<?php

namespace Database\Seeders\Tracker\Event;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventOperationTypeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $position = 0;
        $groups = [
            [ 'code' => 'RECORDINGS', 'name' => 'Recordings', 'position' => $position += 10 ],
            [ 'code' => 'ACTIVITIES', 'name' => 'Activities', 'position' => $position += 10 ],
        ];

        DB::table('event_operation_type_groups')->insert($groups);
    }
}
