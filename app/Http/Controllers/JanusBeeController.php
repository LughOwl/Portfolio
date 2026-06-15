<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Oeuvre;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JanusBeeController extends Controller
{
    public function accueil(): View
    {
        $types = Type::with(['oeuvres' => fn($q) => $q->where('en_vedette', true)->orderBy('ordre')->with('types', 'genres')])
            ->whereIn('nom', ["Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo"])
            ->get();

        $oeuvreAleatoire = Oeuvre::where('en_vedette', true)->inRandomOrder()->first()
            ?? Oeuvre::inRandomOrder()->first();

        return view('janus-bee.accueil', compact('types', 'oeuvreAleatoire'));
    }

    public function catalogue(Request $request): View
    {
        $typesDisponibles = Type::orderBy('nom')->get();
        $genresDisponibles = Genre::orderBy('nom')->get();

        $query = Oeuvre::with(['types', 'genres']);

        $typesSelectionnes = $request->input('types', []);
        $genresSelectionnes = $request->input('genres', []);
        $recherche = $request->input('q', '');

        if (!empty($typesSelectionnes)) {
            foreach ($typesSelectionnes as $typeNom) {
                $query->whereHas('types', fn($q) => $q->where('nom', $typeNom));
            }
        }

        if (!empty($genresSelectionnes)) {
            foreach ($genresSelectionnes as $genreNom) {
                $query->whereHas('genres', fn($q) => $q->where('nom', $genreNom));
            }
        }

        if (!empty($recherche)) {
            $query->where(function ($q) use ($recherche) {
                $q->where('titre', 'like', "%{$recherche}%")
                  ->orWhere('titres_alternatifs', 'like', "%{$recherche}%");
            });
        }

        $oeuvres = $query->orderBy('titre')->paginate(24)->withQueryString();
        $oeuvreAleatoire = Oeuvre::inRandomOrder()->first();

        return view('janus-bee.catalogue', compact(
            'oeuvres', 'typesDisponibles', 'genresDisponibles',
            'typesSelectionnes', 'genresSelectionnes', 'recherche', 'oeuvreAleatoire'
        ));
    }

    public function oeuvre(Oeuvre $oeuvre): View
    {
        $oeuvre->load('types', 'genres');
        $oeuvreAleatoire = Oeuvre::where('id', '!=', $oeuvre->id)->inRandomOrder()->first();
        $metaDescription = mb_substr($oeuvre->synopsis, 0, 157) . (mb_strlen($oeuvre->synopsis) > 157 ? '...' : '');

        return view('janus-bee.oeuvre', compact('oeuvre', 'oeuvreAleatoire', 'metaDescription'));
    }

    public function origines(): View
    {
        return view('janus-bee.origines');
    }

    public function plan(): View
    {
        return view('janus-bee.plan');
    }

    public function legal(): View
    {
        return view('janus-bee.legal');
    }
}
