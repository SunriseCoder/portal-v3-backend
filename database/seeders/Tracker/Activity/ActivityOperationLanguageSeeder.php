<?php

namespace Database\Seeders\Tracker\Activity;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityOperationLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $position = 0;
        $languages = [
            [ 'code' => 'EN', 'name' => 'English', 'position' => $position += 10 ],
            [ 'code' => 'RU', 'name' => 'Russian', 'position' => $position += 10 ],
            [ 'code' => 'ES', 'name' => 'Spanish', 'position' => $position += 10 ],
            [ 'code' => 'IT', 'name' => 'Italian', 'position' => $position += 10 ],
        ];

        DB::table('activity_operation_languages')->insert($languages);
    }
}
