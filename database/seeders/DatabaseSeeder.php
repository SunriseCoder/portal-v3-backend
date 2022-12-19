<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Tracker\Activity\ActivityOperationLanguageSeeder;
use Database\Seeders\Tracker\Activity\ActivityOperationSeeder;
use Database\Seeders\Tracker\Activity\ActivityOperationStatusSeeder;
use Database\Seeders\Tracker\Activity\ActivityOperationTypeGroupSeeder;
use Database\Seeders\Tracker\Activity\ActivityOperationTypeSeeder;
use Database\Seeders\Tracker\Activity\ActivitySeeder;
use Database\Seeders\Tracker\Activity\ActivityTypeSeeder;
use Database\Seeders\Tracker\Event\EventOperationSeeder;
use Database\Seeders\Tracker\Event\EventOperationStatusSeeder;
use Database\Seeders\Tracker\Event\EventOperationTypeGroupSeeder;
use Database\Seeders\Tracker\Event\EventOperationTypeSeeder;
use Database\Seeders\Tracker\Event\EventSeeder;
use Database\Seeders\Tracker\Event\EventTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            EventTypeSeeder::class,
            EventSeeder::class,
            EventOperationTypeGroupSeeder::class,
            EventOperationTypeSeeder::class,
            EventOperationStatusSeeder::class,
            EventOperationSeeder::class,

            ActivityTypeSeeder::class,
            ActivitySeeder::class,
            ActivityOperationTypeGroupSeeder::class,
            ActivityOperationTypeSeeder::class,
            ActivityOperationLanguageSeeder::class,
            ActivityOperationStatusSeeder::class,
            ActivityOperationSeeder::class,
        ]);
    }
}
