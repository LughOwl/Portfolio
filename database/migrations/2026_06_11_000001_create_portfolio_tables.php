<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Formations
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->string('periode', 50);
            $table->string('titre');
            $table->string('org');
            $table->text('desc');
            $table->string('dot', 20)->default('');
            $table->json('tags')->nullable();
            $table->timestamps();
        });

        // Certifications
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->string('nom', 100);
            $table->string('couleur', 50);
            $table->string('desc');
            $table->timestamps();
        });

        // Expériences
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->string('periode', 100);
            $table->string('titre');
            $table->string('org');
            $table->text('desc');
            $table->string('dot', 20)->default('');
            $table->json('tags')->nullable();
            $table->timestamps();
        });

        // Projets
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->string('nom', 100);
            $table->string('sujet');
            $table->text('desc');
            $table->string('logo');
            $table->string('color', 20);
            $table->string('route', 100);
            $table->string('etat', 20)->default('construction');
            $table->timestamps();
        });

        // Compétences (structure JSON complète)
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->json('data');
            $table->timestamps();
        });

        // Profil
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->text('objectif');
            $table->json('infos');
            $table->timestamps();
        });

        // Objectifs (ex-recherches)
        Schema::create('objectifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('priorite');
            $table->string('label_terme', 100);
            $table->string('type', 50);
            $table->string('titre');
            $table->string('badge_color', 20);
            $table->json('details');
            $table->timestamps();
        });

        // Présentation (hero)
        Schema::create('presentation', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('availability');
            $table->json('typewriter_phrases');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presentation');
        Schema::dropIfExists('objectifs');
        Schema::dropIfExists('profil');
        Schema::dropIfExists('competences');
        Schema::dropIfExists('projets');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('formations');
    }
};
