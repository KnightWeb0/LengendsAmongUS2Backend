<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $guarded = [];

        // Albums and Bands (Has Many Relationship) an album belongs to a band but a band has many albums
        public function band()
        {
            return $this->belongsTo(Band::class);
        }

         // Songs and Albums (Belongs To Relationship) a song belongs to an album and an album can have many songs
        public function songs()
        {
            return $this->hasMany(Song::class);
        }

}
