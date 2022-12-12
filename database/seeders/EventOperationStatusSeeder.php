<?php

namespace Database\Seeders;

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
        $statuses = [
            [ 'code' => 'NEW', 'name' => 'New', 'position' => 10 ],
            [ 'code' => 'WORKING', 'name' => 'Working', 'position' => 20 ],
            [ 'code' => 'DONE', 'name' => 'Done', 'position' => 30 ],
            [ 'code' => 'NOT_APPLICABLE', 'name' => 'N/a', 'position' => 40 ],
        ];

        DB::table('event_operation_statuses')->insert($statuses);
    }
}
