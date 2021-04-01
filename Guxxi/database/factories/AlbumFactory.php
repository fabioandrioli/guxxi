<?php

namespace Database\Factories;

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

        return [
            "photo" => $this->faker->word.'.jpg',
            "service_id" => Service::factory(),
        ];
    }
}
