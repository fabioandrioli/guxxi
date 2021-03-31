<?php

namespace Database\Factories\Models;

use App\Models\Telephone;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelephoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telephone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $service = Service::factory()->create();
        return [
           'number' => $this->faker->phoneNumber,
           'service_id' =>  $service->id,
        ];
    }
}
