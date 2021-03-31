<?php

namespace Database\Factories\Models;

use App\Models\Answer;
use App\Models\Rate;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rate = Rate::factory()->create();
        return [
            'reply' => $this->faker->text,
            'rate_id' => $rate->id,
        ];
    }
}
