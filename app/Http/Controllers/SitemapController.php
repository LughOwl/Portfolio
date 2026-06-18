<?php

namespace App\Http\Controllers;

use App\Data\LughOwlData;
use App\Models\BragiBirdMorceau;
use App\Models\IfRecette;
use App\Models\Oeuvre;
use App\Models\ZeusBugArticle;
use Illuminate\Http\Response;

class SitemapController extends Controller
{

    public function index(): Response
    {
        $urls = [];
        $now = now()->toAtomString();

        // Portfolio FR
        foreach (['presentation', 'profil', 'parcours', 'sites', 'contact', 'plan', 'legal'] as $page) {
            $urls[] = ['loc' => route("fr.{$page}"), 'priority' => $page === 'presentation' ? '1.0' : '0.8'];
        }

        // Portfolio EN
        foreach (['presentation', 'profil', 'parcours', 'websites', 'contact', 'sitemap', 'termsofuse'] as $page) {
            $urls[] = ['loc' => route("en.{$page}"), 'priority' => '0.7'];
        }

        // Janus-Bee
        $urls[] = ['loc' => route('fr.janus-bee.accueil'),   'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.janus-bee.catalogue'), 'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.janus-bee.origines'),  'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.janus-bee.plan'),      'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.janus-bee.legal'),     'priority' => '0.3'];

        foreach (Oeuvre::select('id')->get() as $oeuvre) {
            $urls[] = ['loc' => route('fr.janus-bee.oeuvre', $oeuvre->id), 'priority' => '0.6'];
        }

        // Lugh-Owl
        $urls[] = ['loc' => route('fr.lugh-owl.accueil'),   'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.lugh-owl.catalogue'), 'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.lugh-owl.origines'),  'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.lugh-owl.plan'),      'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.lugh-owl.legal'),     'priority' => '0.3'];

        foreach (array_merge(LughOwlData::MODELES, LughOwlData::IDEES, LughOwlData::VIE) as $slug) {
            $urls[] = ['loc' => route('fr.lugh-owl.article', $slug), 'priority' => '0.6'];
        }

        // Gaïa-Deer
        $urls[] = ['loc' => route('fr.gaia-deer.accueil'),       'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.gaia-deer.sante'),         'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.gaia-deer.nutrition'),     'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.gaia-deer.investissement'),'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.gaia-deer.origines'),      'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.gaia-deer.plan'),          'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.gaia-deer.legal'),         'priority' => '0.3'];

        // Ouranos-Taurus
        $urls[] = ['loc' => route('fr.ouranos-taurus.accueil'),        'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.planetes'),       'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.constellations'), 'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.phenomenes'),     'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.mythologie'),     'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.observer'),       'priority' => '0.7'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.origines'),       'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.plan'),           'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.ouranos-taurus.legal'),          'priority' => '0.3'];

        // Zeus-Bug
        $urls[] = ['loc' => route('fr.zeus-bug.accueil'), 'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.zeus-bug.origines'),'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.zeus-bug.plan'),    'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.zeus-bug.legal'),   'priority' => '0.3'];

        foreach (ZeusBugArticle::select('id')->where('publie', true)->get() as $article) {
            $urls[] = ['loc' => route('fr.zeus-bug.article', $article->id), 'priority' => '0.7'];
        }

        // Bragi-Bird
        $urls[] = ['loc' => route('fr.bragi-bird.accueil'), 'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.bragi-bird.origines'),'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.bragi-bird.plan'),    'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.bragi-bird.legal'),   'priority' => '0.3'];

        foreach (BragiBirdMorceau::select('id')->where('publie', true)->get() as $morceau) {
            $urls[] = ['loc' => route('fr.bragi-bird.morceau', $morceau->id), 'priority' => '0.6'];
        }

        // Inari-Fox
        $urls[] = ['loc' => route('fr.inari-fox.accueil'),  'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.inari-fox.recettes'), 'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.inari-fox.origines'), 'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.inari-fox.plan'),     'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.inari-fox.legal'),    'priority' => '0.3'];

        foreach (IfRecette::select('slug')->where('est_publiee', true)->get() as $recette) {
            $urls[] = ['loc' => route('fr.inari-fox.recette', $recette->slug), 'priority' => '0.7'];
        }

        $content = view('sitemap', compact('urls', 'now'))->render();

        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
