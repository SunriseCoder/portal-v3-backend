<?php

namespace Database\Seeders\Tracker\Event;

use App\Models\Tracker\Event\Event;
use App\Models\Tracker\Event\EventOperationStatus;
use App\Models\Tracker\Event\EventOperationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $events = Event::all();
        $types = EventOperationType::all();
        $statuses = EventOperationStatus::all();

        $operations = [];
        foreach ($events as $event) {
            foreach ($types as $type) {
                $operations[] = [
                    'event_id' => $event->id,
                    'type_id' => $type->id,
                    'status_id' => $statuses->random()->id,
                    'summary' => 'Default text',
                ];
            }
        }

        DB::table('event_operations')->insert($operations);
    }
}
