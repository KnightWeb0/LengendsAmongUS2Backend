<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // Songs and Albums (Belongs To Relationship) a song belongs to an album and an album can have many songs
           //this means in this factory the song must refrence the Album
           //-----------------------------------------------------------------------------------------------

            'album_id' => Album::factory(),
            'title' => fake()->word(),
            'duration' => fake()->time(),
            'plays' => fake()->randomDigit(),
        ];
    }
}
