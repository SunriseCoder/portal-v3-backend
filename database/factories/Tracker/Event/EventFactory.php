<?php

namespace Database\Factories\Tracker\Event;

use App\Models\Tracker\Event\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('2012-01-01', '2023-12-12');
        $duration = $this->faker->numberBetween(1, 5);
        $endDate = date_add(date_create($startDate->format('Y-m-d')), date_interval_create_from_date_string($duration . ' days'));
        $name = $this->faker->city() . '-' . $startDate->format('Y');
        return [
            'name' => $name,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
