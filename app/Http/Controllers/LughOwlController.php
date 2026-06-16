<?php

namespace App\Http\Controllers;

use App\Models\LughOwlArticle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LughOwlController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    public function accueil(): View
    {
        $locale           = $this->locale();
        $modeles          = LughOwlArticle::where('categorie', 'modeles')->where('publie', true)->where('en_vedette', true)->orderBy('ordre')->get();
        $idees            = LughOwlArticle::where('categorie', 'idees')->where('publie', true)->where('en_vedette', true)->orderBy('ordre')->get();
        $vie              = LughOwlArticle::where('categorie', 'vie')->where('publie', true)->where('en_vedette', true)->orderBy('ordre')->get();
        $articleAleatoire = LughOwlArticle::where('publie', true)->inRandomOrder()->first();
        return view('lugh-owl.accueil', compact('locale', 'modeles', 'idees', 'vie', 'articleAleatoire'));
    }

    public function article(string $slug): View
    {
        $locale  = $this->locale();
        $article = LughOwlArticle::where('slug', $slug)->where('publie', true)->firstOrFail();
        return view('lugh-owl.article', compact('locale', 'article'));
    }

    public function catalogue(Request $request): View
    {
        $locale = $this->locale();
        $q      = trim($request->get('q', ''));
        $cat    = $request->get('cat', '');

        $categories = $locale === 'en'
            ? ['modeles' => 'Philosophical Models', 'vie' => 'Life is [...]', 'idees' => 'Timeless Ideas']
            : ['modeles' => 'Modèles philosophiques', 'vie' => 'La Vie est [...]', 'idees' => 'Idées immuables'];

        $query = LughOwlArticle::where('publie', true);

        if ($cat && array_key_exists($cat, $categories)) {
            $query->where('categorie', $cat);
        }

        if (mb_strlen($q) >= 2) {
            $query->where(function ($q2) use ($q, $locale) {
                $q2->where('titre', 'LIKE', "%{$q}%")
                   ->orWhere('description', 'LIKE', "%{$q}%");
                if ($locale === 'en') {
                    $q2->orWhere('titre_en', 'LIKE', "%{$q}%")
                       ->orWhere('description_en', 'LIKE', "%{$q}%");
                }
            });
        }

        $articles = $query->orderBy('titre')->paginate(12)->withQueryString();

        return view('lugh-owl.catalogue', compact('locale', 'articles', 'q', 'cat', 'categories'));
    }

    public function recherche(Request $request): View
    {
        $locale    = $this->locale();
        $q         = trim($request->get('q', ''));
        $resultats = collect();

        if (mb_strlen($q) >= 2) {
            $resultats = LughOwlArticle::where('publie', true)
                ->where(function ($query) use ($q, $locale) {
                    $query->where('titre', 'LIKE', "%{$q}%")
                          ->orWhere('description', 'LIKE', "%{$q}%");
                    if ($locale === 'en') {
                        $query->orWhere('titre_en', 'LIKE', "%{$q}%")
                              ->orWhere('description_en', 'LIKE', "%{$q}%");
                    }
                })
                ->orderBy('titre')
                ->get();
        }

        return view('lugh-owl.recherche', compact('locale', 'q', 'resultats'));
    }

    public function origines(): View
    {
        return view('lugh-owl.origines', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('lugh-owl.plan', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('lugh-owl.legal', ['locale' => $this->locale()]);
    }
}
