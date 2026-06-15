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
        $vedette = Oeuvre::where('en_vedette', true)->with('types')->orderBy('ordre')->orderBy('titre')->get();

        return view('admin.sites.janus-bee', array_merge($this->shared(), compact(
            'oeuvres', 'types', 'genres', 'statuts', 'search', 'typeF', 'genreF', 'statusF', 'vedette'
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
        $oeuvre->update(['en_vedette' => !$oeuvre->en_vedette]);
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
        $r = $request->validate(['nom' => 'required|string|max:100|unique:types,nom']);
        Type::create(['nom' => $r['nom']]);
        return back()->with('success', "Type « {$r['nom']} » ajouté.");
    }

    public function typeDestroy(int $id): RedirectResponse
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return back()->with('success', "Type supprimé.");
    }

    public function genreStore(Request $request): RedirectResponse
    {
        $r = $request->validate(['nom' => 'required|string|max:100|unique:genres,nom']);
        Genre::create(['nom' => $r['nom']]);
        return back()->with('success', "Genre « {$r['nom']} » ajouté.");
    }

    public function genreDestroy(int $id): RedirectResponse
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return back()->with('success', "Genre supprimé.");
    }

    /* -------------------------------------------------------
     | HELPERS
     * ----------------------------------------------------- */

    private function validateOeuvre(Request $request): array
    {
        $r = $request->validate([
            'titre'              => 'required|string|max:200',
            'titres_alternatifs' => 'nullable|string',
            'image'              => 'nullable|string|max:200',
            'image_file'         => 'nullable|image|max:10240',
            'sortie'             => 'nullable|string|max:100',
            'status'             => 'nullable|string|max:50',
            'duree'              => 'nullable|string|max:300',
            'synopsis'           => 'nullable|string',
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
                'titres_alternatifs' => $altTitres ?: null,
                'image'              => $r['image'] ?? null,
                'sortie'             => $r['sortie'] ?? null,
                'status'             => $r['status'] ?? null,
                'duree'              => $r['duree'] ?? null,
                'synopsis'           => $r['synopsis'] ?? null,
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
