<?php

namespace Database\Factories\Models;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            'country' => $this->faker->country,
            'state' => 'Paraná',
            'city' =>  $this->faker->city,
            'street' => $this->faker->streetName,
            'district' => $this->faker->address,
            'zipcode' => $this->faker->postcode,
            'number' => $this->faker->buildingNumber,
            'complement' => 'Casa',
            'user_id' => $user->id,
        ];
    }
}
