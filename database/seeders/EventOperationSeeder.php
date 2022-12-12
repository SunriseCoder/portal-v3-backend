<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventOperationStatus;
use App\Models\EventOperationType;
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
        $this->call([
            EventSeeder::class,
            EventOperationTypeSeeder::class,
            EventOperationStatusSeeder::class,
        ]);

        $statuses = EventOperationStatus::all();

        $operations = [];
        foreach (Event::all() as $event) {
            foreach (EventOperationType::all() as $type) {
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
