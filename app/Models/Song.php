<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $guarded = [];

     // Songs and Albums (Belongs To Relationship) a song belongs to an album and an album can have many songs
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
