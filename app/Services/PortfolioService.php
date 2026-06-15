<?php

namespace App\Services;

use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Presentation;
use App\Models\Profil;
use App\Models\Projet;

class PortfolioService
{
    public function getFormations(string $locale): array
    {
        return Formation::where('locale', $locale)
            ->orderBy('ordre')
            ->get()
            ->toArray();
    }

    public function getCertifications(string $locale): array
    {
        return Certification::where('locale', $locale)
            ->orderBy('ordre')
            ->get()
            ->toArray();
    }

    public function getExperiences(string $locale): array
    {
        return Experience::where('locale', $locale)
            ->orderBy('ordre')
            ->get()
            ->toArray();
    }

    public function getCompetences(string $locale): array
    {
        return Competence::where('locale', $locale)->first()?->data ?? [];
    }

    public function getProjets(string $locale): array
    {
        return Projet::where('locale', $locale)
            ->orderBy('ordre')
            ->get()
            ->toArray();
    }

    public function getProfil(string $locale): array
    {
        $p = Profil::where('locale', $locale)->first();

        return $p
            ? ['objectif' => $p->objectif, 'infos' => $p->infos]
            : ['objectif' => '', 'infos' => []];
    }

    public function getObjectifs(string $locale): array
    {
        return Objectif::where('locale', $locale)
            ->orderBy('priorite')
            ->get()
            ->toArray();
    }

    public function getPresentation(string $locale): array
    {
        $p = Presentation::where('locale', $locale)->first();

        return $p ? $p->toArray() : [
            'subtitle'           => '',
            'availability'       => '',
            'typewriter_phrases' => [],
        ];
    }
}
