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
        Schema::create('oeuvre_type', function (Blueprint $table) {
            $table->foreignId('oeuvre_id')->constrained()->cascadeOnDelete();
            $table->foreignId('type_id')->constrained()->cascadeOnDelete();
            $table->primary(['oeuvre_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvre_type');
    }
};
