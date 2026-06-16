<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('lugh_owl_articles', function (Blueprint $table) {
            $table->string('titre_en')->nullable()->after('titre');
            $table->text('description_en')->nullable()->after('description');
            $table->longText('contenu_en')->nullable()->after('contenu');
        });
    }

    public function down(): void
    {
        Schema::table('lugh_owl_articles', function (Blueprint $table) {
            $table->dropColumn(['titre_en', 'description_en', 'contenu_en']);
        });
    }
};
