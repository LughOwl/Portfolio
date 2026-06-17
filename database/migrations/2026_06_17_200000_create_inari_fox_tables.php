<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Référentiel : catégories d'ingrédients (17 catégories ordre marché)
        Schema::create('if_categories_ingredient', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('icone', 10)->default('🥦');
            $table->unsignedTinyInteger('ordre')->default(0);
            $table->timestamps();
        });

        // Référentiel : unités de mesure
        Schema::create('if_unites', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('abreviation', 20);
            $table->boolean('disponible_en')->default(true);
            $table->timestamps();
        });

        // Référentiel : ingrédients normalisés
        Schema::create('if_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('precision_fr')->nullable();
            $table->string('precision_en')->nullable();
            $table->foreignId('categorie_id')->constrained('if_categories_ingredient')->cascadeOnDelete();
            $table->timestamps();
        });

        // Référentiel : régimes alimentaires
        Schema::create('if_regimes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->string('icone', 10)->default('🌿');
            $table->timestamps();
        });

        // Recettes
        Schema::create('if_recettes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('titre_fr');
            $table->string('titre_en');
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->enum('categorie', [
                'entree', 'plat_principal', 'dessert', 'accompagnement',
                'petit_dejeuner', 'encas_gouter', 'aperitif', 'boisson',
            ]);
            $table->enum('difficulte', ['facile', 'moyen', 'difficile'])->default('moyen');
            $table->unsignedSmallInteger('temps_preparation')->default(0); // minutes
            $table->unsignedSmallInteger('temps_cuisson')->default(0);
            $table->unsignedSmallInteger('temps_repos')->default(0);
            $table->unsignedTinyInteger('nb_personnes')->default(4);
            $table->string('photo')->nullable();
            $table->boolean('est_publiee')->default(false);
            $table->boolean('est_vedette')->default(false);
            $table->timestamps();
        });

        // Ingrédients d'une recette
        Schema::create('if_recette_ingredient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recette_id')->constrained('if_recettes')->cascadeOnDelete();
            $table->foreignId('ingredient_id')->constrained('if_ingredients')->cascadeOnDelete();
            $table->decimal('quantite', 8, 2);
            $table->foreignId('unite_id')->constrained('if_unites')->cascadeOnDelete();
            $table->string('precision_libre')->nullable();
            $table->unsignedTinyInteger('position')->default(0);
        });

        // Étapes de préparation
        Schema::create('if_etapes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recette_id')->constrained('if_recettes')->cascadeOnDelete();
            $table->unsignedTinyInteger('position');
            $table->string('titre_fr');
            $table->string('titre_en');
            $table->text('description_fr');
            $table->text('description_en');
            $table->unsignedSmallInteger('duree')->nullable(); // minutes
            $table->timestamps();
        });

        // Astuces
        Schema::create('if_astuces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recette_id')->constrained('if_recettes')->cascadeOnDelete();
            $table->text('description_fr');
            $table->text('description_en');
            $table->unsignedTinyInteger('position')->default(0);
            $table->timestamps();
        });

        // Pivot recette ↔ régime
        Schema::create('if_recette_regime', function (Blueprint $table) {
            $table->foreignId('recette_id')->constrained('if_recettes')->cascadeOnDelete();
            $table->foreignId('regime_id')->constrained('if_regimes')->cascadeOnDelete();
            $table->primary(['recette_id', 'regime_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('if_recette_regime');
        Schema::dropIfExists('if_astuces');
        Schema::dropIfExists('if_etapes');
        Schema::dropIfExists('if_recette_ingredient');
        Schema::dropIfExists('if_recettes');
        Schema::dropIfExists('if_regimes');
        Schema::dropIfExists('if_ingredients');
        Schema::dropIfExists('if_unites');
        Schema::dropIfExists('if_categories_ingredient');
    }
};
