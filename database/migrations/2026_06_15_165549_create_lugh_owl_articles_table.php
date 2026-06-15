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
        Schema::create('lugh_owl_articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->enum('categorie', ['modeles', 'idees', 'vie']);
            $table->string('titre');
            $table->text('description');
            $table->longText('contenu')->nullable();
            $table->string('image')->nullable();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->boolean('publie')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugh_owl_articles');
    }
};
