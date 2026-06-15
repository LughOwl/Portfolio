<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;
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

    // Pages avec une vue unifiée (sans sous-dossier fr/en)
    private const SHARED_VIEWS = [
        'presentation', 'formations', 'training',
        'experiences', 'competences', 'skills',
        'sites', 'websites', 'contact',
    ];

    public function __construct(private PortfolioService $portfolio) {}

    public function fr(string $page = 'presentation'): View
    {
        if (!in_array($page, self::FR_PAGES)) {
            abort(404);
        }

        return view($this->resolveView($page, 'fr'), $this->getData($page, 'fr'));
    }

    public function en(string $page = 'presentation'): View
    {
        if (!in_array($page, self::EN_PAGES)) {
            abort(404);
        }

        return view($this->resolveView($page, 'en'), $this->getData($page, 'en'));
    }

    public function construction(string $project): View
    {
        if (!in_array($project, self::CONSTRUCTION_PROJECTS)) {
            abort(404);
        }

        return view('portfolio.fr.construction', ['project' => $project]);
    }

    private function getData(string $page, string $locale): array
    {
        return match ($page) {
            'presentation'           => ['heroData'       => $this->portfolio->getPresentation($locale)],
            'formations', 'training' => ['formations'     => $this->portfolio->getFormations($locale),
                                         'certifications' => $this->portfolio->getCertifications($locale)],
            'experiences'            => ['experiences'    => $this->portfolio->getExperiences($locale)],
            'competences', 'skills'  => ['competences'   => $this->portfolio->getCompetences($locale)],
            'sites', 'websites'      => ['projets'        => $this->portfolio->getProjets($locale)],
            'profil'                 => ['profil'         => $this->portfolio->getProfil($locale)],
            'recherches'             => ['recherches'     => $this->portfolio->getObjectifs($locale)],
            default                  => [],
        };
    }

    private function resolveView(string $page, string $locale): string
    {
        if (in_array($page, self::SHARED_VIEWS)) {
            $viewName = match ($page) {
                'training'  => 'formations',
                'skills'    => 'competences',
                'websites'  => 'sites',
                default     => $page,
            };
            return "portfolio.{$viewName}";
        }

        return "portfolio.{$locale}.{$page}";
    }
}
