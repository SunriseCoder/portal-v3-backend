<?php

namespace Database\Seeders;

use App\Models\EventOperationTypeGroup;
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
        $this->call([
            EventOperationTypeGroupSeeder::class
        ]);

        $groups = EventOperationTypeGroup::all();
        $types = [
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_PREPARE', 'name' => 'Prepare', 'position' => 10 ],
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_RECORD', 'name' => 'Record', 'position' => 20 ],
            [ 'group_id' => $groups->where('code', 'RECORDINGS')->first()->id,
                'code' => 'RECORDINGS_COLLECT', 'name' => 'Collect', 'position' => 30 ],
            [ 'group_id' => $groups->where('code', 'ACTIVITIES')->first()->id,
                'code' => 'ACTIVITIES_CREATE', 'name' => 'Create', 'position' => 40 ],
        ];

        DB::table('event_operation_types')->insert($types);
    }
}
