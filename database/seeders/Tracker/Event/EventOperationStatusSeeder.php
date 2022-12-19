<?php

namespace Database\Seeders\Tracker\Event;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventOperationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $position = 0;
        $statuses = [
            [ 'code' => 'NEW', 'name' => 'New', 'position' => $position += 10 ],
            [ 'code' => 'WORKING', 'name' => 'Working', 'position' => $position += 10 ],
            [ 'code' => 'DONE', 'name' => 'Done', 'position' => $position += 10 ],

            [ 'code' => 'NOT_APPLICABLE', 'name' => 'N/a', 'position' => $position += 10 ],
        ];

        DB::table('event_operation_statuses')->insert($statuses);
    }
}
