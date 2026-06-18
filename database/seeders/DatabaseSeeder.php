<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,

            // Portfolio
            PortfolioSeeder::class,
            PortfolioEnSeeder::class,
            EnTranslationSeeder::class,

            // Janus-Bee
            JanusBeeSeeder::class,
            JanusBeeEnTranslationSeeder::class,
            JanusBeeEnMetaSeeder::class,

            // Lugh-Owl
            LughOwlArticleSeeder::class,
            LughOwlEnTranslationSeeder::class,

            // Gaïa-Deer
            GaiaDeerSectionSeeder::class,

            // Zeus-Bug
            ZeusBugArticleSeeder::class,

            // Inari-Fox (référentiel d'abord car il truncate tout)
            InariFoxReferentielSeeder::class,
            InariFoxRecettesSeeder::class,
            InariFoxRecettes2Seeder::class,
            InariFoxRecettes3Seeder::class,
            InariFoxPrecisionEnSeeder::class,
        ]);
    }
}
