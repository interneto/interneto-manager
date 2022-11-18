<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $beginHttp = 'https//';
        $middleHttp = fake()->word();
        $endHttp = '.com/';
        return [
            'name' => fake()->name(),
            'description' => fake()->text(random_int(10, 255)),
            'url' => $beginHttp . $middleHttp . $endHttp,
            'thumbnail' => fake()->imageUrl(),
            'icon' => fake()->image(),
            'rating' => fake()->numberBetween(1, 5),
            'date_modified' => fake()->date(),
        ];
    }
}
