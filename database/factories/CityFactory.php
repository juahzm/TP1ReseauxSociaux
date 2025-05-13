<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->randomElement([
                'Montreal',
                'Quebec City',
                'Laval',
                'Gatineau',
                'Longueuil',
                'Sherbrooke',
                'Saguenay',
                'Lévis',
                'Trois-Rivières',
                'Terrebonne',
                'Saint-Jean-sur-Richelieu',
                'Repentigny',
                'Drummondville',
                'Saint-Jérôme',
                'Granby',
            ]),


        ];
    }
}
