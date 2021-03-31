<?php

namespace Database\Factories\Models;

use App\Models\Album;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $service = Service::factory()->create();
        return [
            "photo" => $this->faker->name().'jpg',
            "service_id" => $service->id,
        ];
    }
}
