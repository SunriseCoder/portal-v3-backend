<?php

namespace Database\Seeders\Tracker\Event;

use App\Models\Tracker\Event\EventOperationTypeGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventOperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $groups = EventOperationTypeGroup::all();
        $position = 0;
        $types = [
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_PREPARE', 'name' => 'Prepare', 'position' => $position += 10 ],
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_RECORD', 'name' => 'Record', 'position' => $position += 10 ],
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_COLLECT', 'name' => 'Collect', 'position' => $position += 10 ],

            [ 'group_id' => $groups->where('code', 'ACTIVITIES')->first()->id,
                'code' => 'ACTIVITIES_CREATE', 'name' => 'Create', 'position' => $position += 10 ],
        ];

        DB::table('event_operation_types')->insert($types);
    }
}
