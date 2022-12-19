<?php

namespace Database\Seeders\Tracker\Activity;

use App\Models\Tracker\Activity\ActivityType;
use App\Models\Tracker\Event\Event;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $types = ActivityType::all();
        $events = Event::all();

        $activities = [];
        foreach ($events as $event) {
            $activitiesPerDay = random_int(1, 5);

            $dates = new DatePeriod(new DateTime($event->start_date), new DateInterval('P1D'), new DateTime($event->end_date));
            foreach($dates as $date){
                for ($i = 0; $i < $activitiesPerDay; $i++) {
                    $activities[] = [
                        'type_id' => $types->random()->id,
                        'event_id' => $event->id,
                        'date' => $date,
                        'name' => Str::random(),
                        'summary' => 'Default text',
                    ];
                }
            }
        }

        DB::table('activities')->insert($activities);
    }
}
