<?php

namespace Database\Factories;

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
        return [
            'note' => 'regular',
            'review' => $this->faker->text,
            'user_id' => User::factory(),
            'service_id' =>  Service::factory(),
        ];
    }
}
