<?php

namespace App\Http\Controllers;

use App\Models\IfRecette;
use App\Models\IfIngredient;
use App\Models\IfCategorieIngredient;
use App\Models\IfUnite;
use App\Models\IfRegime;
use App\Models\IfEtape;
use App\Models\IfAstuce;
use App\Models\IfRecetteIngredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminInariFoxController extends Controller
{
    // ── Index ─────────────────────────────────────────────────────────────────

    public function index(Request $request): View
    {
        $query = IfRecette::withCount(['ingredients', 'etapes']);

        if ($request->filled('categorie')) {
            $query->where('categorie', $request->categorie);
        }
        if ($request->filled('statut')) {
            $query->where('est_publiee', $request->statut === 'publiee');
        }
        if ($request->filled('vedette')) {
            $query->where('est_vedette', true);
        }

        match ($request->get('tri', 'date')) {
            'titre'      => $query->orderBy('titre_fr'),
            'difficulte' => $query->orderByRaw("FIELD(difficulte,'facile','moyen','difficile')"),
            'categorie'  => $query->orderBy('categorie'),
            default      => $query->latest(),
        };

        $recettes = $query->paginate(20)->withQueryString();

        return view('admin.sites.inari-fox', compact('recettes'));
    }

    // ── Recettes CRUD ─────────────────────────────────────────────────────────

    public function create(): View
    {
        $recette    = null;
        $categories = IfCategorieIngredient::orderBy('ordre')->get();
        $unites     = IfUnite::orderBy('nom_fr')->get();
        $regimes    = IfRegime::orderBy('nom_fr')->get();
        $ingredients = IfIngredient::with('categorie')->orderBy('nom_fr')->get();

        return view('admin.sites.inari-fox-form', compact('recette', 'categories', 'unites', 'regimes', 'ingredients'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateRecette($request);

        DB::transaction(function () use ($request, $data) {
            // Photo
            if ($request->hasFile('photo')) {
                $data['photo'] = $request->file('photo')->store('inari-fox/recettes', 'public');
            }

            $data['slug'] = IfRecette::generateSlug($data['titre_fr']);

            $recette = IfRecette::create($data);

            $this->syncRegimes($recette, $request->input('regimes', []));
            $this->syncIngredients($recette, $request->input('ingredients', []));
            $this->syncEtapes($recette, $request->input('etapes', []));
            $this->syncAstuces($recette, $request->input('astuces', []));
        });

        return redirect()->route('admin.inari-fox.index')
            ->with('success', 'Recette créée.');
    }

    public function edit(int $id): View
    {
        $recette = IfRecette::with([
            'ingredients.ingredient', 'ingredients.unite',
            'etapes', 'astuces', 'regimes',
        ])->findOrFail($id);

        $categories  = IfCategorieIngredient::orderBy('ordre')->get();
        $unites      = IfUnite::orderBy('nom_fr')->get();
        $regimes     = IfRegime::orderBy('nom_fr')->get();
        $ingredients = IfIngredient::with('categorie')->orderBy('nom_fr')->get();

        return view('admin.sites.inari-fox-form', compact('recette', 'categories', 'unites', 'regimes', 'ingredients'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $recette = IfRecette::findOrFail($id);
        $data    = $this->validateRecette($request);

        DB::transaction(function () use ($request, $recette, $data) {
            if ($request->hasFile('photo')) {
                if ($recette->photo) {
                    Storage::disk('public')->delete($recette->photo);
                }
                $data['photo'] = $request->file('photo')->store('inari-fox/recettes', 'public');
            }

            $recette->update($data);

            $this->syncRegimes($recette, $request->input('regimes', []));
            $this->syncIngredients($recette, $request->input('ingredients', []));
            $this->syncEtapes($recette, $request->input('etapes', []));
            $this->syncAstuces($recette, $request->input('astuces', []));
        });

        return redirect()->route('admin.inari-fox.index')
            ->with('success', 'Recette mise à jour.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $recette = IfRecette::findOrFail($id);
        if ($recette->photo) {
            Storage::disk('public')->delete($recette->photo);
        }
        $recette->delete();

        return redirect()->route('admin.inari-fox.index')
            ->with('success', 'Recette supprimée.');
    }

    public function togglePublie(int $id): RedirectResponse
    {
        $r = IfRecette::findOrFail($id);
        $r->update(['est_publiee' => !$r->est_publiee]);
        return back();
    }

    public function toggleVedette(int $id): RedirectResponse
    {
        $r = IfRecette::findOrFail($id);
        $r->update(['est_vedette' => !$r->est_vedette]);
        return back();
    }

    // ── Référentiel Ingrédients ───────────────────────────────────────────────

    public function ingredients(): View
    {
        $categories  = IfCategorieIngredient::with('ingredients')->orderBy('ordre')->get();
        $unites      = IfUnite::orderBy('nom_fr')->get();
        $regimes     = IfRegime::orderBy('nom_fr')->get();

        return view('admin.sites.inari-fox-referentiel', compact('categories', 'unites', 'regimes'));
    }

    public function ingredientStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom_fr'        => 'required|string|max:120',
            'nom_en'        => 'required|string|max:120',
            'precision_fr'  => 'nullable|string|max:120',
            'precision_en'  => 'nullable|string|max:120',
            'categorie_id'  => 'required|exists:if_categories_ingredient,id',
        ]);

        IfIngredient::create($data);

        return back()->with('success', 'Ingrédient ajouté.');
    }

    public function ingredientUpdate(Request $request, int $id): RedirectResponse
    {
        $ingredient = IfIngredient::findOrFail($id);
        $data = $request->validate([
            'nom_fr'        => 'required|string|max:120',
            'nom_en'        => 'required|string|max:120',
            'precision_fr'  => 'nullable|string|max:120',
            'precision_en'  => 'nullable|string|max:120',
            'categorie_id'  => 'required|exists:if_categories_ingredient,id',
        ]);

        $ingredient->update($data);

        return back()->with('success', 'Ingrédient mis à jour.');
    }

    public function ingredientDestroy(int $id): RedirectResponse
    {
        $ingredient = IfIngredient::findOrFail($id);

        if ($ingredient->recetteIngredients()->exists()) {
            return back()->with('error', 'Impossible de supprimer : cet ingrédient est utilisé dans une recette.');
        }

        $ingredient->delete();

        return back()->with('success', 'Ingrédient supprimé.');
    }

    // ── Référentiel Catégories ────────────────────────────────────────────────

    public function categorieStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom_fr' => 'required|string|max:120',
            'nom_en' => 'required|string|max:120',
            'icone'  => 'nullable|string|max:10',
        ]);

        $data['ordre'] = IfCategorieIngredient::max('ordre') + 1;
        IfCategorieIngredient::create($data);

        return back()->with('success', 'Catégorie ajoutée.');
    }

    public function categorieUpdate(Request $request, int $id): RedirectResponse
    {
        $categorie = IfCategorieIngredient::findOrFail($id);
        $data = $request->validate([
            'nom_fr' => 'required|string|max:120',
            'nom_en' => 'required|string|max:120',
            'icone'  => 'nullable|string|max:10',
        ]);

        $categorie->update($data);

        return back()->with('success', 'Catégorie mise à jour.');
    }

    // ── Référentiel Unités ────────────────────────────────────────────────────

    public function uniteStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom_fr'       => 'required|string|max:80',
            'nom_en'       => 'required|string|max:80',
            'abreviation'  => 'required|string|max:20',
            'disponible_en'=> 'nullable|boolean',
        ]);
        $data['disponible_en'] = $request->boolean('disponible_en');

        IfUnite::create($data);

        return back()->with('success', 'Unité ajoutée.');
    }

    public function uniteUpdate(Request $request, int $id): RedirectResponse
    {
        $unite = IfUnite::findOrFail($id);
        $data = $request->validate([
            'nom_fr'       => 'required|string|max:80',
            'nom_en'       => 'required|string|max:80',
            'abreviation'  => 'required|string|max:20',
            'disponible_en'=> 'nullable|boolean',
        ]);
        $data['disponible_en'] = $request->boolean('disponible_en');

        $unite->update($data);

        return back()->with('success', 'Unité mise à jour.');
    }

    // ── Référentiel Régimes ───────────────────────────────────────────────────

    public function regimeStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom_fr' => 'required|string|max:80',
            'nom_en' => 'required|string|max:80',
            'icone'  => 'nullable|string|max:10',
        ]);

        IfRegime::create($data);

        return back()->with('success', 'Régime ajouté.');
    }

    public function regimeUpdate(Request $request, int $id): RedirectResponse
    {
        $regime = IfRegime::findOrFail($id);
        $data = $request->validate([
            'nom_fr' => 'required|string|max:80',
            'nom_en' => 'required|string|max:80',
            'icone'  => 'nullable|string|max:10',
        ]);

        $regime->update($data);

        return back()->with('success', 'Régime mis à jour.');
    }

    // ── Helpers privés ────────────────────────────────────────────────────────

    private function validateRecette(Request $request): array
    {
        $categories  = ['entree','plat_principal','dessert','accompagnement','petit_dejeuner','encas_gouter','aperitif','boisson'];
        $difficultes = ['facile','moyen','difficile'];

        return $request->validate([
            'titre_fr'          => 'required|string|max:255',
            'titre_en'          => 'required|string|max:255',
            'description_fr'    => 'nullable|string|max:1000',
            'description_en'    => 'nullable|string|max:1000',
            'categorie'         => 'required|in:' . implode(',', $categories),
            'difficulte'        => 'required|in:' . implode(',', $difficultes),
            'temps_preparation' => 'required|integer|min:0|max:9999',
            'temps_cuisson'     => 'required|integer|min:0|max:9999',
            'temps_repos'       => 'required|integer|min:0|max:9999',
            'nb_personnes'      => 'required|integer|min:1|max:100',
            'photo'             => 'nullable|image|mimes:jpg,jpeg,webp|max:2048',
            'est_publiee'       => 'nullable|boolean',
            'est_vedette'       => 'nullable|boolean',
        ]) + [
            'est_publiee' => $request->boolean('est_publiee'),
            'est_vedette' => $request->boolean('est_vedette'),
        ];
    }

    private function syncRegimes(IfRecette $recette, array $ids): void
    {
        $recette->regimes()->sync($ids);
    }

    private function syncIngredients(IfRecette $recette, array $rows): void
    {
        $recette->ingredients()->delete();

        foreach ($rows as $pos => $row) {
            if (empty($row['ingredient_id']) || empty($row['quantite'])) {
                continue;
            }
            IfRecetteIngredient::create([
                'recette_id'    => $recette->id,
                'ingredient_id' => $row['ingredient_id'],
                'quantite'      => $row['quantite'],
                'unite_id'      => $row['unite_id'],
                'precision_libre'    => $row['precision_libre']    ?? null,
                'precision_libre_en' => $row['precision_libre_en'] ?? null,
                'position'           => $pos,
            ]);
        }
    }

    private function syncEtapes(IfRecette $recette, array $rows): void
    {
        $recette->etapes()->delete();

        foreach ($rows as $pos => $row) {
            if (empty($row['titre_fr']) || empty($row['description_fr'])) {
                continue;
            }
            IfEtape::create([
                'recette_id'     => $recette->id,
                'position'       => $pos + 1,
                'titre_fr'       => $row['titre_fr'],
                'titre_en'       => $row['titre_en'] ?? $row['titre_fr'],
                'description_fr' => $row['description_fr'],
                'description_en' => $row['description_en'] ?? $row['description_fr'],
            ]);
        }
    }

    private function syncAstuces(IfRecette $recette, array $rows): void
    {
        $recette->astuces()->delete();

        foreach ($rows as $pos => $row) {
            if (empty($row['description_fr'])) {
                continue;
            }
            IfAstuce::create([
                'recette_id'     => $recette->id,
                'description_fr' => $row['description_fr'],
                'description_en' => $row['description_en'] ?? $row['description_fr'],
                'position'       => $pos,
            ]);
        }
    }
}
