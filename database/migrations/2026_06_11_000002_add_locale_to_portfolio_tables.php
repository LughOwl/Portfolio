<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['formations', 'certifications', 'experiences', 'projets', 'objectifs'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('locale', 5)->default('fr')->after('id');
            });
        }

        Schema::table('competences', function (Blueprint $table) {
            $table->string('locale', 5)->default('fr')->after('id');
        });

        Schema::table('profil', function (Blueprint $table) {
            $table->string('locale', 5)->default('fr')->after('id');
        });

        Schema::table('presentation', function (Blueprint $table) {
            $table->string('locale', 5)->default('fr')->after('id');
        });
    }

    public function down(): void
    {
        foreach (['formations','certifications','experiences','projets','objectifs','competences','profil','presentation'] as $t) {
            Schema::table($t, fn(Blueprint $b) => $b->dropColumn('locale'));
        }
    }
};
