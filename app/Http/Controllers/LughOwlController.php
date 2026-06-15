<?php

namespace App\Http\Controllers;

use App\Models\LughOwlArticle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LughOwlController extends Controller
{
    public function accueil(): View
    {
        $modeles = LughOwlArticle::where('categorie', 'modeles')->where('publie', true)->orderBy('ordre')->limit(3)->get();
        $idees   = LughOwlArticle::where('categorie', 'idees')->where('publie', true)->orderBy('ordre')->limit(4)->get();
        $vie     = LughOwlArticle::where('categorie', 'vie')->where('publie', true)->orderBy('ordre')->limit(4)->get();
        return view('lugh-owl.accueil', compact('modeles', 'idees', 'vie'));
    }

    public function modeles(): View
    {
        $articles = LughOwlArticle::where('categorie', 'modeles')->where('publie', true)->orderBy('ordre')->get();
        return view('lugh-owl.modeles', compact('articles'));
    }

    public function idees(): View
    {
        $articles = LughOwlArticle::where('categorie', 'idees')->where('publie', true)->orderBy('ordre')->get();
        return view('lugh-owl.idees', compact('articles'));
    }

    public function vie(): View
    {
        $articles = LughOwlArticle::where('categorie', 'vie')->where('publie', true)->orderBy('ordre')->get();
        return view('lugh-owl.vie', compact('articles'));
    }

    public function article(string $slug): View
    {
        $article = LughOwlArticle::where('slug', $slug)->where('publie', true)->firstOrFail();
        return view('lugh-owl.article', compact('article'));
    }

    public function recherche(Request $request): View
    {
        $q = trim($request->get('q', ''));
        $resultats = collect();

        if (mb_strlen($q) >= 2) {
            $resultats = LughOwlArticle::where('publie', true)
                ->where(function ($query) use ($q) {
                    $query->where('titre', 'LIKE', "%{$q}%")
                          ->orWhere('description', 'LIKE', "%{$q}%");
                })
                ->orderBy('categorie')
                ->orderBy('ordre')
                ->get();
        }

        return view('lugh-owl.recherche', compact('q', 'resultats'));
    }

    public function origines(): View
    {
        return view('lugh-owl.origines');
    }

    public function plan(): View
    {
        return view('lugh-owl.plan');
    }

    public function legal(): View
    {
        return view('lugh-owl.legal');
    }
}
