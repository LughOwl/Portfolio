<?php

namespace App\Http\Controllers;

use App\Data\LughOwlData;
use App\Models\Oeuvre;
use Illuminate\Http\Response;

class SitemapController extends Controller
{

    public function index(): Response
    {
        $urls = [];
        $now = now()->toAtomString();

        // Portfolio FR
        foreach (['presentation', 'profil', 'recherches', 'formations', 'experiences', 'competences', 'sites', 'contact', 'plan', 'legal'] as $page) {
            $urls[] = ['loc' => route("fr.{$page}"), 'priority' => $page === 'presentation' ? '1.0' : '0.8'];
        }

        // Portfolio EN
        foreach (['presentation', 'training', 'experiences', 'skills', 'websites', 'contact', 'sitemap', 'termsofuse'] as $page) {
            $urls[] = ['loc' => route("en.{$page}"), 'priority' => '0.7'];
        }

        // Janus-Bee
        $urls[] = ['loc' => route('fr.janus-bee.accueil'),  'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.janus-bee.catalogue'), 'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.janus-bee.origines'),  'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.janus-bee.plan'),      'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.janus-bee.legal'),     'priority' => '0.3'];

        foreach (Oeuvre::select('id')->get() as $oeuvre) {
            $urls[] = ['loc' => route('fr.janus-bee.oeuvre', $oeuvre->id), 'priority' => '0.6'];
        }

        // Lugh-Owl
        $urls[] = ['loc' => route('fr.lugh-owl.accueil'),  'priority' => '0.9'];
        $urls[] = ['loc' => route('fr.lugh-owl.modeles'),  'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.lugh-owl.idees'),    'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.lugh-owl.vie'),      'priority' => '0.8'];
        $urls[] = ['loc' => route('fr.lugh-owl.origines'), 'priority' => '0.5'];
        $urls[] = ['loc' => route('fr.lugh-owl.plan'),     'priority' => '0.3'];
        $urls[] = ['loc' => route('fr.lugh-owl.legal'),    'priority' => '0.3'];

        foreach (array_merge(LughOwlData::MODELES, LughOwlData::IDEES, LughOwlData::VIE) as $slug) {
            $urls[] = ['loc' => route('fr.lugh-owl.article', $slug), 'priority' => '0.6'];
        }

        $content = view('sitemap', compact('urls', 'now'))->render();

        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
