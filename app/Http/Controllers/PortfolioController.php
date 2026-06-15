<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Presentation;
use App\Models\Profil;
use App\Models\Projet;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    private const FR_PAGES = [
        'presentation', 'profil', 'recherches', 'formations', 'experiences',
        'competences', 'sites', 'contact', 'plan', 'legal',
    ];

    private const EN_PAGES = [
        'presentation', 'training', 'experiences',
        'skills', 'websites', 'contact', 'sitemap', 'termsofuse',
    ];

    private const CONSTRUCTION_PROJECTS = [
        'inari-fox', 'bragi-bird', 'gaia-deer', 'zeus-bug', 'ouranos-taurus',
    ];

    public function fr(string $page = 'presentation'): View
    {
        if (!in_array($page, self::FR_PAGES)) {
            abort(404);
        }

        $data = match ($page) {
            'formations'  => [
                'formations'     => Formation::where('locale', 'fr')->orderBy('ordre')->get()->map(fn($f) => $f->toArray())->toArray(),
                'certifications' => Certification::where('locale', 'fr')->orderBy('ordre')->get()->map(fn($c) => $c->toArray())->toArray(),
            ],
            'experiences' => [
                'experiences' => Experience::where('locale', 'fr')->orderBy('ordre')->get()->map(fn($e) => $e->toArray())->toArray(),
            ],
            'competences' => [
                'competences' => (Competence::where('locale', 'fr')->first()?->data) ?? [],
            ],
            'sites' => [
                'projets' => Projet::where('locale', 'fr')->orderBy('ordre')->get()->map(fn($p) => $p->toArray())->toArray(),
            ],
            'profil' => [
                'profil' => (function () {
                    $p = Profil::where('locale', 'fr')->first();
                    return $p ? ['objectif' => $p->objectif, 'infos' => $p->infos] : ['objectif' => '', 'infos' => []];
                })(),
            ],
            'recherches' => [
                'recherches' => Objectif::where('locale', 'fr')->orderBy('priorite')->get()->map(fn($o) => $o->toArray())->toArray(),
            ],
            'presentation' => [
                'heroData' => (function () {
                    $p = Presentation::where('locale', 'fr')->first();
                    return $p ? $p->toArray() : [
                        'subtitle'           => '',
                        'availability'       => '',
                        'typewriter_phrases' => [],
                    ];
                })(),
            ],
            default => [],
        };

        return view("portfolio.fr.{$page}", array_merge(['locale' => 'fr'], $data));
    }

    public function en(string $page = 'presentation'): View
    {
        if (!in_array($page, self::EN_PAGES)) {
            abort(404);
        }

        $data = match ($page) {
            'presentation' => [
                'heroData' => (function () {
                    $p = Presentation::where('locale', 'en')->first();
                    return $p ? $p->toArray() : ['subtitle' => '', 'availability' => '', 'typewriter_phrases' => []];
                })(),
            ],
            'training'    => [
                'formations'     => Formation::where('locale', 'en')->orderBy('ordre')->get()->map(fn($f) => $f->toArray())->toArray(),
                'certifications' => Certification::where('locale', 'en')->orderBy('ordre')->get()->map(fn($c) => $c->toArray())->toArray(),
            ],
            'experiences' => [
                'experiences' => Experience::where('locale', 'en')->orderBy('ordre')->get()->map(fn($e) => $e->toArray())->toArray(),
            ],
            'skills'    => [
                'competences' => (Competence::where('locale', 'en')->first()?->data) ?? [],
            ],
            'websites'  => [
                'projets' => Projet::where('locale', 'en')->orderBy('ordre')->get()->map(fn($p) => $p->toArray())->toArray(),
            ],
            default => [],
        };

        return view("portfolio.en.{$page}", array_merge(['locale' => 'en'], $data));
    }

    public function construction(string $project): View
    {
        if (!in_array($project, self::CONSTRUCTION_PROJECTS)) {
            abort(404);
        }

        return view('portfolio.fr.construction', ['project' => $project, 'locale' => 'fr']);
    }
}
