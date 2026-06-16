<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Oeuvre;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminJanusBeeController extends Controller
{
    private function shared(): array
    {
        return [
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
            'siteLabel'         => 'Janus-Bee',
            'siteColor'         => '#ffdc00',
        ];
    }

    /* -------------------------------------------------------
     | LISTE
     * ----------------------------------------------------- */

    public function index(Request $request): View
    {
        $query  = Oeuvre::with('types', 'genres');
        $search = $request->input('q', '');
        $typeF  = $request->input('type', '');
        $genreF = $request->input('genre', '');
        $statusF = $request->input('status', '');

        if ($search) {
            $query->where(fn($q) => $q
                ->where('titre', 'like', "%{$search}%")
                ->orWhere('titres_alternatifs', 'like', "%{$search}%")
            );
        }
        if ($typeF) {
            $query->whereHas('types', fn($q) => $q->where('nom', $typeF));
        }
        if ($genreF) {
            $query->whereHas('genres', fn($q) => $q->where('nom', $genreF));
        }
        if ($statusF) {
            $query->where('status', $statusF);
        }

        $oeuvres = $query->orderBy('titre')->paginate(30)->withQueryString();
        $types   = Type::orderBy('nom')->get();
        $genres  = Genre::orderBy('nom')->get();
        $statuts = Oeuvre::distinct()->orderBy('status')->pluck('status');
        $typesOrdre = ["Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo"];
        $vedetteParType = collect($typesOrdre)->mapWithKeys(function ($nom) {
            $oeuvres = Oeuvre::where('en_vedette', true)
                ->whereHas('types', fn($q) => $q->where('nom', $nom))
                ->with('types')
                ->orderBy('ordre')->orderBy('titre')
                ->get();
            return [$nom => $oeuvres];
        })->filter(fn($c) => $c->isNotEmpty());
        $vedette = Oeuvre::where('en_vedette', true)->with('types')->orderBy('ordre')->orderBy('titre')->get();

        return view('admin.sites.janus-bee', array_merge($this->shared(), compact(
            'oeuvres', 'types', 'genres', 'statuts', 'search', 'typeF', 'genreF', 'statusF', 'vedette', 'vedetteParType'
        )));
    }

    /* -------------------------------------------------------
     | FORMULAIRE CREATE / EDIT
     * ----------------------------------------------------- */

    public function create(): View
    {
        $types  = Type::orderBy('nom')->get();
        $genres = Genre::orderBy('nom')->get();
        return view('admin.sites.janus-bee-form', array_merge($this->shared(), [
            'oeuvre' => null,
            'types'  => $types,
            'genres' => $genres,
        ]));
    }

    public function edit(int $id): View
    {
        $oeuvre = Oeuvre::with('types', 'genres')->findOrFail($id);
        $types  = Type::orderBy('nom')->get();
        $genres = Genre::orderBy('nom')->get();
        return view('admin.sites.janus-bee-form', array_merge($this->shared(), compact(
            'oeuvre', 'types', 'genres'
        )));
    }

    /* -------------------------------------------------------
     | STORE / UPDATE / DESTROY
     * ----------------------------------------------------- */

    public function store(Request $request): RedirectResponse
    {
        $r = $this->validateOeuvre($request);
        $oeuvre = Oeuvre::create($r['fields']);
        $oeuvre->types()->sync($r['types']);
        $oeuvre->genres()->sync($r['genres']);

        if ($request->hasFile('image_file')) {
            $filename = $this->uploadImage($request, $oeuvre->id);
            $oeuvre->update(['image' => $filename]);
        }

        return redirect()->route('admin.janus-bee.index')->with('success', "« {$oeuvre->titre} » ajouté.");
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $r = $this->validateOeuvre($request);
        $oeuvre->update($r['fields']);
        $oeuvre->types()->sync($r['types']);
        $oeuvre->genres()->sync($r['genres']);

        if ($request->hasFile('image_file')) {
            $filename = $this->uploadImage($request, $oeuvre->id);
            $oeuvre->update(['image' => $filename]);
        }

        return redirect()->route('admin.janus-bee.index')->with('success', "« {$oeuvre->titre} » mis à jour.");
    }

    public function destroy(int $id): RedirectResponse
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $titre  = $oeuvre->titre;
        $oeuvre->delete();
        return redirect()->route('admin.janus-bee.index')->with('success', "« {$titre} » supprimé.");
    }

    public function toggleVedette(int $id): RedirectResponse
    {
        $oeuvre = Oeuvre::findOrFail($id);
        if (!$oeuvre->en_vedette) {
            $max = Oeuvre::where('en_vedette', true)->max('ordre') ?? 0;
            $oeuvre->update(['en_vedette' => true, 'ordre' => $max + 1]);
        } else {
            $oeuvre->update(['en_vedette' => false, 'ordre' => 0]);
        }
        return back();
    }

    public function move(Request $request, int $id): RedirectResponse
    {
        $r = $request->validate([
            'direction' => 'required|in:up,down',
            'type'      => 'required|string',
        ]);

        $peers = Oeuvre::where('en_vedette', true)
            ->whereHas('types', fn($q) => $q->where('nom', $r['type']))
            ->orderBy('ordre')->orderBy('id')
            ->get();

        // Normalise les positions au cas où il y aurait des ex aequo
        foreach ($peers->values() as $i => $o) {
            $o->timestamps = false;
            $o->ordre = $i;
            $o->save();
        }
        $peers = $peers->values();

        $index = $peers->search(fn($o) => $o->id === $id);
        if ($index === false) return back();

        $swapIndex = $r['direction'] === 'up' ? $index - 1 : $index + 1;
        if ($swapIndex < 0 || $swapIndex >= $peers->count()) return back();

        $a = $peers[$index];
        $b = $peers[$swapIndex];
        [$a->ordre, $b->ordre] = [$b->ordre, $a->ordre];
        $a->timestamps = false; $b->timestamps = false;
        $a->save(); $b->save();

        return back();
    }

    public function reorder(Request $request): RedirectResponse
    {
        $request->validate(['ordre' => 'required|array', 'ordre.*' => 'integer|min:0']);
        foreach ($request->input('ordre') as $id => $pos) {
            Oeuvre::where('id', $id)->update(['ordre' => $pos]);
        }
        return back()->with('success', 'Ordre mis à jour.');
    }

    /* -------------------------------------------------------
     | TYPES & GENRES
     * ----------------------------------------------------- */

    public function typeStore(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'nom'    => 'required|string|max:100|unique:types,nom',
            'nom_en' => 'nullable|string|max:100',
        ]);
        Type::create(['nom' => $r['nom'], 'nom_en' => $r['nom_en'] ?? null]);
        return back()->with('success', "Type « {$r['nom']} » ajouté.");
    }

    public function typeUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $request->validate(['nom_en' => 'nullable|string|max:100']);
        Type::findOrFail($id)->update(['nom_en' => $r['nom_en'] ?: null]);
        return back()->with('success', "Traduction EN du type mise à jour.");
    }

    public function typeDestroy(int $id): RedirectResponse
    {
        Type::findOrFail($id)->delete();
        return back()->with('success', "Type supprimé.");
    }

    public function genreStore(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'nom'    => 'required|string|max:100|unique:genres,nom',
            'nom_en' => 'nullable|string|max:100',
        ]);
        Genre::create(['nom' => $r['nom'], 'nom_en' => $r['nom_en'] ?? null]);
        return back()->with('success', "Genre « {$r['nom']} » ajouté.");
    }

    public function genreUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $request->validate(['nom_en' => 'nullable|string|max:100']);
        Genre::findOrFail($id)->update(['nom_en' => $r['nom_en'] ?: null]);
        return back()->with('success', "Traduction EN du genre mise à jour.");
    }

    public function genreDestroy(int $id): RedirectResponse
    {
        Genre::findOrFail($id)->delete();
        return back()->with('success', "Genre supprimé.");
    }

    /* -------------------------------------------------------
     | HELPERS
     * ----------------------------------------------------- */

    private function validateOeuvre(Request $request): array
    {
        $r = $request->validate([
            'titre'              => 'required|string|max:200',
            'titre_en'           => 'nullable|string|max:200',
            'titres_alternatifs' => 'nullable|string',
            'image'              => 'nullable|string|max:200',
            'image_file'         => 'nullable|image|max:10240',
            'sortie'             => 'nullable|string|max:100',
            'sortie_en'          => 'nullable|string|max:100',
            'status'             => 'nullable|string|max:50',
            'status_en'          => 'nullable|string|max:50',
            'duree'              => 'nullable|string|max:300',
            'duree_en'           => 'nullable|string|max:300',
            'synopsis'           => 'nullable|string',
            'synopsis_en'        => 'nullable|string',
            'video'              => 'nullable|string|max:300',
            'types'              => 'nullable|array',
            'types.*'            => 'integer|exists:types,id',
            'genres'             => 'nullable|array',
            'genres.*'           => 'integer|exists:genres,id',
        ]);

        $altTitres = array_values(array_filter(
            array_map('trim', explode("\n", $r['titres_alternatifs'] ?? '')),
            fn($l) => $l !== ''
        ));

        return [
            'fields' => [
                'titre'              => $r['titre'],
                'titre_en'           => $r['titre_en'] ?: null,
                'titres_alternatifs' => $altTitres ?: null,
                'image'              => $r['image'] ?? null,
                'sortie'             => $r['sortie'] ?? null,
                'sortie_en'          => $r['sortie_en'] ?: null,
                'status'             => $r['status'] ?? null,
                'status_en'          => $r['status_en'] ?: null,
                'duree'              => $r['duree'] ?? null,
                'duree_en'           => $r['duree_en'] ?: null,
                'synopsis'           => $r['synopsis'] ?? null,
                'synopsis_en'        => $r['synopsis_en'] ?: null,
                'video'              => $r['video'] ?? null,
            ],
            'types'  => $r['types'] ?? [],
            'genres' => $r['genres'] ?? [],
        ];
    }

    private function uploadImage(Request $request, int $id): string
    {
        $file = $request->file('image_file');
        $ext  = $file->getClientOriginalExtension();
        $name = \Illuminate\Support\Str::slug($request->input('titre')) . '.' . $ext;
        $file->move(public_path('assets/Janus-Bee'), $name);
        return $name;
    }
}
