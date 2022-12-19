<?php

namespace Database\Seeders\Tracker\Activity;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityOperationStatusSeeder extends Seeder
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
            [ 'code' => 'CHECKING', 'name' => 'Checking', 'position' => $position += 10 ],
            [ 'code' => 'UPLOADING', 'name' => 'Uploading', 'position' => $position += 10 ],
            [ 'code' => 'PUBLISHED', 'name' => 'Published', 'position' => $position += 10 ],

            [ 'code' => 'PAUSED', 'name' => 'Paused', 'position' => $position += 10 ],
            [ 'code' => 'FAILED', 'name' => 'Failed', 'position' => $position += 10 ],
            [ 'code' => 'NOT_APPLICABLE', 'name' => 'N/a', 'position' => $position += 10 ],
        ];

        DB::table('activity_operation_statuses')->insert($statuses);
    }
}
