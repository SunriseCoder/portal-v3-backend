<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        if (DB::table('event_types')->count() === 0) {
            $this->call([EventTypeSeeder::class]);
        }

        foreach(EventType::all() as $type) {
            Event::factory()
                ->count(50)
                ->for($type, 'type')
                ->create();
        }
    }
}
