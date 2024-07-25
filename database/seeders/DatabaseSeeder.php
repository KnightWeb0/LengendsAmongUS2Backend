<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Band;
use App\Models\Record_Label;
use App\Models\RecordLabel;
use App\Models\Song;
use App\Models\User;
use Database\Factories\RecordLabelFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    $band = Band::factory()->create();
    $album = Album::factory()->create(['band_id' => $band->id]);
    $artist = Artist::factory()->create(['band_id' => $band->id]);
    $song = Song::factory()->create(['album_id' => $album->id]);
    $recordLabel = RecordLabel::factory()->create();
    $artist->recordLabel()->associate($recordLabel);
    $artist->save();

    }
}
