<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Oeuvre;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JanusBeeController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    private const TYPES_ORDRE = [
        "Série d'animation", "Film d'animation", "Film live",
        "Court métrage", "Livre", "Jeu vidéo",
    ];

    public function accueil(): View
    {
        $locale = $this->locale();

        $types = Type::with(['oeuvres' => fn($q) => $q->where('en_vedette', true)->orderBy('ordre')->with('types', 'genres')])
            ->whereIn('nom', self::TYPES_ORDRE)
            ->get();

        $oeuvreAleatoire = Oeuvre::where('en_vedette', true)->inRandomOrder()->first()
            ?? Oeuvre::inRandomOrder()->first();

        return view('janus-bee.accueil', compact('types', 'oeuvreAleatoire', 'locale'));
    }

    public function catalogue(Request $request): View
    {
        $locale = $this->locale();

        $typesDisponibles  = Type::orderBy('nom')->get();
        $genresDisponibles = Genre::orderBy('nom')->get();

        $query = Oeuvre::with(['types', 'genres']);

        $typesSelectionnes  = $request->input('types', []);
        $genresSelectionnes = $request->input('genres', []);
        $recherche          = $request->input('q', '');

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
                  ->orWhere('titre_en', 'like', "%{$recherche}%")
                  ->orWhere('titres_alternatifs', 'like', "%{$recherche}%");
            });
        }

        $oeuvres         = $query->orderBy('titre')->paginate(24)->withQueryString();
        $oeuvreAleatoire = Oeuvre::inRandomOrder()->first();

        return view('janus-bee.catalogue', compact(
            'oeuvres', 'typesDisponibles', 'genresDisponibles',
            'typesSelectionnes', 'genresSelectionnes', 'recherche', 'oeuvreAleatoire', 'locale'
        ));
    }

    public function oeuvre(Oeuvre $oeuvre): View
    {
        $locale = $this->locale();
        $oeuvre->load('types', 'genres');

        $synopsis        = ($locale === 'en' && $oeuvre->synopsis_en) ? $oeuvre->synopsis_en : $oeuvre->synopsis;
        $oeuvreAleatoire = Oeuvre::where('id', '!=', $oeuvre->id)->inRandomOrder()->first();
        $metaDescription = mb_substr($synopsis ?? '', 0, 157) . (mb_strlen($synopsis ?? '') > 157 ? '...' : '');

        return view('janus-bee.oeuvre', compact('oeuvre', 'oeuvreAleatoire', 'metaDescription', 'locale'));
    }

    public function origines(): View
    {
        return view('janus-bee.origines', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('janus-bee.plan', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('janus-bee.legal', ['locale' => $this->locale()]);
    }
}
