<?php

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
        Schema::create('bragi_bird_morceaux', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('titre_en')->nullable();
            $table->string('compositeur');
            $table->string('compositeur_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('mp3_path')->nullable();
            $table->boolean('publie')->default(true);
            $table->integer('ordre')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bragi_bird_morceaux');
    }
};
