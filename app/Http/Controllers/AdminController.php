<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Experience;
use App\Models\Projet;
use Illuminate\View\View;

class AdminController extends Controller
{
    public const PORTFOLIO_SECTIONS = [
        'presentation' => 'Présentation',
        'profil'       => 'Profil',
        'objectifs'    => 'Objectifs',
        'formations'   => 'Formations',
        'experiences'  => 'Expériences',
        'competences'  => 'Compétences',
        'sites'        => 'Projets & Sites',
        'parametres'   => 'Paramètres globaux',
    ];

    public const SITES = [
        'inari-fox'      => ['label' => 'Inari-Fox',      'color' => '#c80000'],
        'bragi-bird'     => ['label' => 'Bragi-Bird',     'color' => '#ff8c00'],
        'janus-bee'      => ['label' => 'Janus-Bee',      'color' => '#ffdc00'],
        'gaia-deer'      => ['label' => 'Gaïa-Deer',      'color' => '#00af00'],
        'zeus-bug'       => ['label' => 'Zeus-Bug',       'color' => '#00f0d2'],
        'lugh-owl'       => ['label' => 'Lugh-Owl',       'color' => '#0078ff'],
        'ouranos-taurus' => ['label' => 'Ouranos-Taurus', 'color' => '#7d00b4'],
    ];

    public function dashboard(): View
    {
        $projets     = Projet::where('locale', 'fr')->get();
        $enligne     = $projets->where('etat', 'ligne')->count();
        $constr      = $projets->where('etat', 'construction')->count();

        return view('admin.dashboard', [
            'portfolioSections' => self::PORTFOLIO_SECTIONS,
            'sites'             => self::SITES,
            'stats' => [
                'pages_portfolio' => count(self::PORTFOLIO_SECTIONS),
                'projets_total'   => $projets->count(),
                'projets_enligne' => $enligne,
                'projets_constr'  => $constr,
                'formations_fr'   => Formation::where('locale', 'fr')->count(),
                'experiences_fr'  => Experience::where('locale', 'fr')->count(),
            ],
        ]);
    }

    public function portfolio(string $section): View
    {
        if (!array_key_exists($section, self::PORTFOLIO_SECTIONS)) {
            abort(404);
        }

        return view("admin.portfolio.{$section}", [
            'section'           => $section,
            'sectionLabel'      => self::PORTFOLIO_SECTIONS[$section],
            'portfolioSections' => self::PORTFOLIO_SECTIONS,
            'sites'             => self::SITES,
        ]);
    }

    public function site(string $site): View
    {
        if (!array_key_exists($site, self::SITES)) {
            abort(404);
        }

        return view("admin.sites.{$site}", [
            'site'              => $site,
            'siteLabel'         => self::SITES[$site]['label'],
            'siteColor'         => self::SITES[$site]['color'],
            'portfolioSections' => self::PORTFOLIO_SECTIONS,
            'sites'             => self::SITES,
        ]);
    }
}
