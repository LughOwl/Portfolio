<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->string('sortie_en', 100)->nullable()->after('sortie');
            $table->string('status_en', 50)->nullable()->after('status');
            $table->string('duree_en', 300)->nullable()->after('duree');
        });
    }

    public function down(): void
    {
        Schema::table('oeuvres', function (Blueprint $table) {
            $table->dropColumn(['sortie_en', 'status_en', 'duree_en']);
        });
    }
};
