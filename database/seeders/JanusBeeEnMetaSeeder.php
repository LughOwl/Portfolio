<?php

namespace Database\Seeders;

use App\Models\Oeuvre;
use Illuminate\Database\Seeder;

class JanusBeeEnMetaSeeder extends Seeder
{
    public function run(): void
    {
        Oeuvre::all()->each(function (Oeuvre $o) {
            $o->update([
                'sortie_en' => $this->translateSortie($o->sortie ?? ''),
                'status_en' => $this->translateStatus($o->status ?? ''),
                'duree_en'  => $this->translateDuree($o->duree ?? ''),
            ]);
        });
    }

    private function translateSortie(string $s): string
    {
        // "à aujourd'hui" doit être traité avant le " à " générique
        return str_replace(
            ['à aujourd\'hui', '- En cours', '(En cours)', '- Présent', 'Présent', ' à '],
            ['– present',      '– ongoing',  '(ongoing)',  '– present', 'present', ' – '],
            $s
        );
    }

    private function translateStatus(string $s): string
    {
        return match ($s) {
            'En cours'  => 'Ongoing',
            'Terminé'   => 'Completed',
            'Abandonné' => 'Abandoned',
            'En pause'  => 'On hold',
            default     => $s,
        };
    }

    private function translateDuree(string $s): string
    {
        // Ordre important : phrases longues avant mots courts
        return str_replace(
            [
                'pour voir les fins principales A à E',
                'pour l\'histoire des Arches',
                'films d\'animation', 'film d\'animation',
                'épisodes spéciaux de', 'épisode spécial', 'Spécial', 'spécial',
                'films récapitulatifs', 'film récapitulatif',
                'jeux principaux',
                'Monde ouvert',
                'avec extensions',
                'exploration complète',
                'pour une partie',
                'Tomes', 'Tome',
                'épisodes', 'épisode',
                'saisons', 'saison', 'Saison',
                'heures', 'heure',
                'parties', 'partie',
                'Infinie', 'Indéfinie',
                'Environ', 'environ',
                ' pour ', ' par ', ' et ', ' les ',
                'préceptes', 'thèses',
                'suite de',
                'exploration',
                'histoire',
                'complétion',
            ],
            [
                'to see all main endings A through E',
                'for the story of the Arcs',
                'animated films', 'animated film',
                'special episodes of', 'special episode', 'Special', 'special',
                'recap films', 'recap film',
                'main games',
                'Open World',
                'with DLCs',
                'full exploration',
                'for a single playthrough',
                'Volumes', 'Volume',
                'episodes', 'episode',
                'seasons', 'season', 'Season',
                'hours', 'hour',
                'parts', 'part',
                'Infinite', 'Indefinite',
                'About', 'about',
                ' for ', ' per ', ' and ', ' the ',
                'precepts', 'theses',
                'sequel of',
                'exploration',
                'story',
                'completion',
            ],
            $s
        );
    }
}
