<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $names=[
            'Italian', 'French', 'Japanese', 'Chinese', 'Mexican', 'American', 'Indian', 'Greek', 'Spanish', 'Thai', 'Vietnamese', 'Turkish', 'Moroccan', 'Lebanese', 'Korean', 'Russian', 'German', 'Swedish', 'Danish', 'Norwegian', 'Irish', 'English', 'Scottish', 'Welsh', 'Brazilian', 'Argentinian', 'Peruvian', 'Colombian', 'Venezuelan', 'Mexican', 'Canadian', 'Australian', 'New Zealand'
        ];

        return [
            'name' => $this->faker->randomElement($names),
        ];
    }
}
