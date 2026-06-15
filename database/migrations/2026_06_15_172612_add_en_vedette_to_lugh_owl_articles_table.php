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
        Schema::table('lugh_owl_articles', function (Blueprint $table) {
            $table->boolean('en_vedette')->default(false)->after('publie');
        });
    }

    public function down(): void
    {
        Schema::table('lugh_owl_articles', function (Blueprint $table) {
            $table->dropColumn('en_vedette');
        });
    }
};
