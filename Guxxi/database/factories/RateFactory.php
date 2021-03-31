<?php

namespace Database\Factories\Models;

use App\Models\Rate;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        $service = User::factory()->create();
        return [
            'note' => 'regular',
            'review' => $this->faker->text,
            'user_id' => $user->id,
            'service_id' =>  $service->id,
        ];
    }
}
