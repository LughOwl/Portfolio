<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gaia_deer_sections', function (Blueprint $table) {
            $table->id();
            $table->enum('rubrique', ['sante', 'nutrition', 'investissement']);
            $table->string('titre');
            $table->string('titre_en')->nullable();
            $table->longText('contenu');
            $table->longText('contenu_en')->nullable();
            $table->unsignedSmallInteger('ordre')->default(0);
            $table->boolean('publie')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gaia_deer_sections');
    }
};
