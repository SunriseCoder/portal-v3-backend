<?php

namespace Database\Seeders\Tracker\Activity;

use App\Models\Tracker\Activity\Activity;
use App\Models\Tracker\Activity\ActivityOperationLanguage;
use App\Models\Tracker\Activity\ActivityOperationStatus;
use App\Models\Tracker\Activity\ActivityOperationType;
use App\Models\Tracker\Activity\ActivityOperationTypeGroup;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $activities = Activity::all();
        $typeGroups = ActivityOperationTypeGroup::all();
        $types = ActivityOperationType::all();
        $languages = ActivityOperationLanguage::all();
        $statuses = ActivityOperationStatus::all();

        $typeGroupMap = [];
        foreach ($typeGroups as $typeGroup) {
            $typeGroupMap[$typeGroup->id] = $typeGroup;
        }

        $operations = [];
        foreach ($activities as $activity) {
            foreach ($types as $type) {
                if ($typeGroupMap[$type->group_id]->is_language_dependent) {
                    foreach ($languages as $language) {
                        /*if (random_int(0, 2) !== 0) {
                            continue;
                        }*/

                        $operations[] = [
                            'activity_id' => $activity->id,
                            'type_id' => $type->id,
                            'language_id' => $language->id,
                            'status_id' => $statuses->random()->id,
                            'summary' => 'Default text',
                        ];
                    }
                } else {
                    foreach ($languages as $language) {
                        if (random_int(0, 2) !== 0) {
                            continue;
                        }

                        $operations[] = [
                            'activity_id' => $activity->id,
                            'type_id' => $type->id,
                            'language_id' => null,
                            'status_id' => $statuses->random()->id,
                            'summary' => 'Default text',
                        ];
                    }
                }
            }
        }

        DB::table('activity_operations')->insert($operations);
    }
}
