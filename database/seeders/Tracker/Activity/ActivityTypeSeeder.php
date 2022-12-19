<?php

namespace Database\Seeders\Tracker\Activity;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTypeSeeder extends Seeder
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
            [ 'code' => 'LECTURE', 'name' => 'Lecture', 'position' => $position += 10 ],
            [ 'code' => 'BHAJAN', 'name' => 'Bhajan', 'position' => $position += 10 ],
            [ 'code' => 'YAJNA', 'name' => 'Yajna', 'position' => $position += 10 ],
        ];

        DB::table('activity_types')->insert($types);
    }
}
