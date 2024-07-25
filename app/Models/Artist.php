<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = [];

     // Artists and Bands (Has One Relationship) an Artist has a one band and a band belongs to an artist
    public function band()
    {
        return $this->belongsTo(Band::class);
    }

          //Record Labels and Artists (Has Many Relationship)
        //a record can have many Artists and a artist can belong to many record labels
        //we refrence the Artists belongs to the album company
    public function recordLabel()
    {
        return $this->belongsTo(RecordLabel::class);
    }
}
