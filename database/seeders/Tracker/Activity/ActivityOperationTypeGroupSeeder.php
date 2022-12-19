<?php

namespace Database\Seeders\Tracker\Activity;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityOperationTypeGroupSeeder extends Seeder
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
            [ 'code' => 'EXTRACT', 'name' => 'Extract', 'is_language_dependent' => false, 'position' => $position += 10 ],
            [ 'code' => 'TRANSLATION', 'name' => 'Translation', 'is_language_dependent' => true, 'position' => $position += 10 ],
        ];

        DB::table('activity_operation_type_groups')->insert($groups);
    }
}
