<?php

use App\Models\Band;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('title');
            $table->integer('amount_of_songs');
            $table->string('release_date');
            //->constrained()->cascadeOnDelete(); this means this table cannot exist with out the band table
            // Albums and Bands (Has Many Relationship) an album belongs to a band but a band has many albums
            // $table->foreignId(Band::class)->constrained()->nullable();
            $table->foreignId('band_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
