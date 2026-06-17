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
        Schema::create('zeus_bug_articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('titre_en')->nullable();
            $table->text('intro');
            $table->text('intro_en')->nullable();
            $table->longText('contenu');
            $table->longText('contenu_en')->nullable();
            $table->string('categorie');
            $table->string('tags')->nullable();
            $table->string('github_url')->nullable();
            $table->date('date_projet')->nullable();
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
        Schema::dropIfExists('zeus_bug_articles');
    }
};
