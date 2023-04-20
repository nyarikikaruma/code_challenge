<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Tasks;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_task>
 */
class User_taskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'task_id'=>Tasks::factory(),
            'due_date' =>$this->faker->date(),
            'start_time' => $this->faker->dateTimeThisDecade(),
            'end_time' => $this->faker->dateTimeThisDecade(),
            'remarks' =>Str::random(100),
            'status_id' =>Status::factory()
        ];
    }
}
