<?php

namespace Database\Seeders;

use App\Data\PortfolioData;
use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Presentation;
use App\Models\Profil;
use App\Models\Projet;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Formations
        foreach (PortfolioData::formations() as $i => $f) {
            Formation::create([
                'locale'  => 'fr',
                'ordre'   => $i,
                'periode' => $f['periode'],
                'titre'   => $f['titre'],
                'org'     => $f['org'],
                'desc'    => $f['desc'],
                'dot'     => $f['dot'],
                'tags'    => $f['tags'],
            ]);
        }

        // Certifications
        foreach (PortfolioData::certifications() as $i => $c) {
            Certification::create([
                'locale'  => 'fr',
                'ordre'   => $i,
                'nom'     => $c['nom'],
                'couleur' => $c['couleur'],
                'desc'    => $c['desc'],
            ]);
        }

        // Expériences
        foreach (PortfolioData::experiences() as $i => $e) {
            Experience::create([
                'locale'  => 'fr',
                'ordre'   => $i,
                'periode' => $e['periode'],
                'titre'   => $e['titre'],
                'org'     => $e['org'],
                'desc'    => $e['desc'],
                'dot'     => $e['dot'],
                'tags'    => $e['tags'],
            ]);
        }

        // Projets
        foreach (PortfolioData::projets() as $i => $p) {
            Projet::create([
                'locale' => 'fr',
                'ordre'  => $i,
                'nom'    => $p['nom'],
                'sujet'  => $p['sujet'],
                'desc'   => $p['desc'],
                'logo'   => $p['logo'],
                'color'  => $p['color'],
                'route'  => $p['route'],
                'etat'   => $p['etat'],
            ]);
        }

        // Compétences
        Competence::create(['locale' => 'fr', 'data' => PortfolioData::competences()]);

        // Profil
        $profil = PortfolioData::profil();
        Profil::create([
            'locale'   => 'fr',
            'objectif' => $profil['objectif'],
            'infos'    => $profil['infos'],
        ]);

        // Objectifs (ex-recherches)
        foreach (PortfolioData::recherches() as $r) {
            Objectif::create([
                'locale'      => 'fr',
                'priorite'    => $r['priorite'],
                'label_terme' => $r['label_terme'],
                'type'        => $r['type'],
                'titre'       => $r['titre'],
                'badge_color' => $r['badge_color'],
                'details'     => $r['details'],
            ]);
        }

        // Présentation
        Presentation::create([
            'locale'             => 'fr',
            'subtitle'           => 'Master Cybersécurité — UFR MIM, Metz | Nationalités française & luxembourgeoise',
            'availability'       => 'Admis en Master Cybersécurité · UFR MIM Metz · Sept. 2026',
            'typewriter_phrases' => [
                'Admis en Master Cybersécurité',
                'Futur SOC Analyst',
                'Futur Architecte Cybersécurité',
            ],
        ]);

        $this->command->info('Portfolio FR seeded !');
    }
}
