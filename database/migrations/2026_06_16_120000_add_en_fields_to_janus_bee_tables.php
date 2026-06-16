<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->string('titre_en', 200)->nullable()->after('titre');
            $table->text('synopsis_en')->nullable()->after('synopsis');
        });

        Schema::table('types', function (Blueprint $table) {
            $table->string('nom_en', 100)->nullable()->after('nom');
        });

        Schema::table('genres', function (Blueprint $table) {
            $table->string('nom_en', 100)->nullable()->after('nom');
        });
    }

    public function down(): void
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->dropColumn(['titre_en', 'synopsis_en']);
        });
        Schema::table('types', function (Blueprint $table) {
            $table->dropColumn('nom_en');
        });
        Schema::table('genres', function (Blueprint $table) {
            $table->dropColumn('nom_en');
        });
    }
};
