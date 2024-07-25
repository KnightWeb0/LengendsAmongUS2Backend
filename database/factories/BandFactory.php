<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
           // Albums and Bands (Has Many Relationship) an album belongs to a band but a band has many albums
           //this means in the factory the band dose not need to refrence the album
           //-----------------------------------------------------------------------------------------------

           return [
            //
            'band_name' => fake()->name(),
            'genre' => fake()->word(),
        ];
    }
}
