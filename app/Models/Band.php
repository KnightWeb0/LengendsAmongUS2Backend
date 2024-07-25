<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Albums and Bands (Has Many Relationship) an album belongs to a band but a band has many albums
    public function albums()
    {
        return $this->hasMany(Album::class);
    }


      // Artists and Bands (Has One Relationship) an Artist has a one band and a band belongs to an artist
      public function artist()
      {
          return $this->hasOne(Artist::class);
      }
}
