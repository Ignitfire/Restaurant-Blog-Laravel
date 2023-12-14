<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //$title = $this->faker->sentence($nbWords = 6, $variableNbWords = true);
        $title = $this->faker->company();

        return [
            'owner_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
            'title' => $title,
            'content' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'food_type' => $this->faker->catchPhrase(),
            'price' => $this->faker->words($nb = 1, $asText = true),
            'url' => str_replace(' ', '-', $title),
            'tags' => $this->faker->words($nb = 3, $asText = true),
            'status' => 'open',
        ];
    }
}
