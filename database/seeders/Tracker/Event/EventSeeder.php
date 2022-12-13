<?php

namespace Database\Seeders\Tracker\Event;

use App\Models\Tracker\Event\Event;
use App\Models\Tracker\Event\EventType;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            EventTypeSeeder::class,
        ]);

        foreach(EventType::all() as $type) {
            Event::factory()
                ->count(50)
                ->for($type, 'type')
                ->create();
        }
    }
}
