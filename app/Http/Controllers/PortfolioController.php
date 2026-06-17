<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    private const FR_PAGES = [
        'presentation', 'profil', 'parcours',
        'sites', 'contact', 'plan', 'legal',
    ];

    private const EN_PAGES = [
        'presentation', 'profil', 'parcours',
        'websites', 'contact', 'sitemap', 'termsofuse',
    ];

    private const CONSTRUCTION_PROJECTS = [
        'gaia-deer', 'zeus-bug', 'ouranos-taurus',
    ];

    // Pages avec une vue unifiée (sans sous-dossier fr/en)
    private const SHARED_VIEWS = [
        'presentation', 'parcours',
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

    public function construction(string $project, string $locale = 'fr'): View
    {
        if (!in_array($project, self::CONSTRUCTION_PROJECTS)) {
            abort(404);
        }

        return view('portfolio.fr.construction', ['project' => $project, 'locale' => $locale]);
    }

    private function getData(string $page, string $locale): array
    {
        $data = match ($page) {
            'presentation'      => ['heroData'       => $this->portfolio->getPresentation($locale)],
            'parcours'          => ['formations'     => $this->portfolio->getFormations($locale),
                                    'certifications' => $this->portfolio->getCertifications($locale),
                                    'experiences'    => $this->portfolio->getExperiences($locale)],
            'sites', 'websites' => ['projets'        => $this->portfolio->getProjets($locale)],
            'profil'            => ['profil'         => $this->portfolio->getProfil($locale),
                                    'recherches'     => $this->portfolio->getObjectifs($locale),
                                    'competences'    => $this->portfolio->getCompetences($locale)],
            default             => [],
        };

        return array_merge($data, ['locale' => $locale]);
    }

    private function resolveView(string $page, string $locale): string
    {
        if (in_array($page, self::SHARED_VIEWS)) {
            $viewName = match ($page) {
                'websites'  => 'sites',
                default     => $page,
            };
            return "portfolio.{$viewName}";
        }

        return "portfolio.{$locale}.{$page}";
    }
}
