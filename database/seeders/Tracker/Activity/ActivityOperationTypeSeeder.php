<?php

namespace Database\Seeders\Tracker\Activity;

use App\Models\Tracker\Activity\ActivityOperationTypeGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityOperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $groups = ActivityOperationTypeGroup::all();
        $position = 0;
        $types = [
            [ 'group_id' => $groups->where('code', 'EXTRACT')->first()->id,
                'code' => 'EXTRACT_BHAJANS', 'name' => 'Bhajans', 'position' => $position += 10 ],

            [ 'group_id' => $groups->where('code', 'TRANSLATION')->first()->id,
                'code' => 'BASIC', 'name' => 'Basic', 'position' => $position += 10 ],
            [ 'group_id' => $groups->where('code', 'TRANSLATION')->first()->id,
                'code' => 'SLIDES', 'name' => 'Slides', 'position' => $position += 10 ],
            [ 'group_id' => $groups->where('code', 'TRANSLATION')->first()->id,
                'code' => 'SUBTITLES', 'name' => 'Subtitles', 'position' => $position += 10 ],
        ];

        DB::table('activity_operation_types')->insert($types);
    }
}
