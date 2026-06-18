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
        Schema::table('if_recette_ingredient', function (Blueprint $table) {
            $table->string('precision_libre_en')->nullable()->after('precision_libre');
        });
    }

    public function down(): void
    {
        Schema::table('if_recette_ingredient', function (Blueprint $table) {
            $table->dropColumn('precision_libre_en');
        });
    }
};
