<?php

namespace Database\Seeders;

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
        $eventTypes = [
            [ 'code' => 'RECORDINGS', 'name' => 'Recordings', 'position' => 10 ],
            [ 'code' => 'ACTIVITIES', 'name' => 'Activities', 'position' => 20 ],
        ];

        DB::table('event_operation_type_groups')->insert($eventTypes);
    }
}
