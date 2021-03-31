<?php

namespace Database\Factories\Models;

use App\Models\Site;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Site::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $service = Service::factory()->create();
        return [
            'link' => $this->faker->url,
            'description' => $this->faker->sentence,
            'service_id' => $service->id,
        ];
    }
}
