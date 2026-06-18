<?php

namespace App\Http\Controllers;

use App\Models\IfRecette;
use App\Models\IfCategorieIngredient;
use App\Models\IfRegime;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InariFoxController extends Controller
{
    public function accueil(string $locale = 'fr')
    {
        $vedettes = IfRecette::where('est_publiee', true)
            ->where('est_vedette', true)
            ->latest()
            ->take(6)
            ->get();

        $recentes = IfRecette::where('est_publiee', true)
            ->latest()
            ->take(3)
            ->get();

        return view('inari-fox.accueil', compact('locale', 'vedettes', 'recentes'));
    }

    public function recettes(Request $request, string $locale = 'fr')
    {
        $query = IfRecette::where('est_publiee', true)
            ->with(['regimes']);

        // Filtre catégorie
        if ($request->filled('categorie')) {
            $query->where('categorie', $request->categorie);
        }

        // Filtre difficulté
        if ($request->filled('difficulte')) {
            $query->where('difficulte', $request->difficulte);
        }

        // Filtre durée (temps_preparation + temps_cuisson + temps_repos)
        if ($request->filled('duree')) {
            $max = (int) $request->duree;
            $query->whereRaw('(temps_preparation + temps_cuisson + temps_repos) <= ?', [$max]);
        }

        // Filtre régime
        if ($request->filled('regime')) {
            $query->whereHas('regimes', fn ($q) => $q->where('if_regimes.id', $request->regime));
        }

        // Filtre ingrédient
        if ($request->filled('ingredient')) {
            $query->whereHas('ingredients.ingredient', function ($q) use ($request) {
                $q->where('nom_fr', 'like', '%' . $request->ingredient . '%')
                  ->orWhere('nom_en', 'like', '%' . $request->ingredient . '%');
            });
        }

        $recettes  = $query->latest()->paginate(12)->withQueryString();
        $regimes   = IfRegime::orderBy('nom_fr')->get();

        return view('inari-fox.recettes', compact('locale', 'recettes', 'regimes'));
    }

    public function recette(string $slug, string $locale = 'fr')
    {
        $recette = IfRecette::where('slug', $slug)
            ->where('est_publiee', true)
            ->with(['ingredients.ingredient', 'ingredients.unite', 'etapes', 'astuces', 'regimes'])
            ->firstOrFail();

        return view('inari-fox.recette', compact('locale', 'recette'));
    }

    public function pdf(string $slug, string $locale = 'fr')
    {
        $recette = IfRecette::where('slug', $slug)
            ->where('est_publiee', true)
            ->with(['ingredients.ingredient', 'ingredients.unite', 'etapes', 'astuces', 'regimes'])
            ->firstOrFail();

        $pdf = Pdf::loadView('inari-fox.recette-pdf', compact('locale', 'recette'))
            ->setPaper('a4', 'portrait');

        $filename = $locale === 'en'
            ? 'recipe-' . $recette->slug . '.pdf'
            : 'recette-' . $recette->slug . '.pdf';

        return $pdf->download($filename);
    }

    public function random(string $locale = 'fr')
    {
        $recette = IfRecette::where('est_publiee', true)->inRandomOrder()->firstOrFail();

        $route = $locale === 'en' ? 'en.inari-fox.recette' : 'fr.inari-fox.recette';

        return redirect()->route($route, $recette->slug);
    }

    public function origines(string $locale = 'fr')
    {
        return view('inari-fox.origines', compact('locale'));
    }

    public function legal(string $locale = 'fr')
    {
        return view('inari-fox.legal', compact('locale'));
    }

    public function plan(string $locale = 'fr')
    {
        return view('inari-fox.plan', compact('locale'));
    }
}
