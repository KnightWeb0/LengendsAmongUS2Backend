<?php

namespace Database\Factories;

use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         // Albums and Bands (Has Many Relationship) an album belongs to a band but a band has many albums
           //this means in this factory we must refrence the band
              //-----------------------------------------------------------------------------------------------

        return [
            //
            'band_id' => Band::factory(), // this is referencing  the relationship of has many relationship
            'cover' => fake()->imageUrl(),
            'title' => fake()->name( ),
            'amount_of_songs'=> fake()->numberBetween(1,12),
            'release_date' => fake()->date(),
        ];
    }
}
