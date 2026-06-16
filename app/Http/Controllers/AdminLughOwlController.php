<?php

namespace App\Http\Controllers;

use App\Models\LughOwlArticle;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;

class AdminLughOwlController extends Controller
{
    private const CATEGORIES = ['modeles', 'idees', 'vie'];

    public function index(Request $request): View
    {
        $categorie = $request->get('categorie');
        $search    = trim($request->get('search', ''));

        $query = LughOwlArticle::query()->orderBy('categorie')->orderBy('titre');

        if ($categorie && in_array($categorie, self::CATEGORIES)) {
            $query->where('categorie', $categorie);
        }
        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('titre', 'LIKE', "%{$search}%")
                  ->orWhere('slug', 'LIKE', "%{$search}%");
            });
        }

        $articles = $query->paginate(30)->withQueryString();
        $vedetteParCategorie = LughOwlArticle::where('en_vedette', true)->orderBy('ordre')->get()->groupBy('categorie');

        return view('admin.sites.lugh-owl', compact('articles', 'vedetteParCategorie', 'categorie', 'search') + [
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function create(): View
    {
        return view('admin.sites.lugh-owl-form', [
            'article'           => null,
            'categories'        => self::CATEGORIES,
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug']  = $this->uniqueSlug($data['titre']);
        $data['ordre'] = LughOwlArticle::where('categorie', $data['categorie'])->max('ordre') + 1;

        if ($request->hasFile('image_file')) {
            $data['image'] = $this->uploadImage($request);
        }

        LughOwlArticle::create($data);

        return redirect()->route('admin.lugh-owl.index')->with('success', 'Article créé.');
    }

    public function edit(int $id): View
    {
        $article = LughOwlArticle::findOrFail($id);
        return view('admin.sites.lugh-owl-form', [
            'article'           => $article,
            'categories'        => self::CATEGORIES,
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $article = LughOwlArticle::findOrFail($id);
        $data = $this->validated($request, $id);

        if ($request->hasFile('image_file')) {
            $data['image'] = $this->uploadImage($request);
        }

        $article->update($data);

        return redirect()->route('admin.lugh-owl.index')->with('success', 'Article mis à jour.');
    }

    public function destroy(int $id): RedirectResponse
    {
        LughOwlArticle::findOrFail($id)->delete();
        return redirect()->route('admin.lugh-owl.index')->with('success', 'Article supprimé.');
    }

    public function togglePublie(int $id): RedirectResponse
    {
        $article = LughOwlArticle::findOrFail($id);
        $article->update(['publie' => !$article->publie]);
        return back()->with('success', $article->publie ? 'Article publié.' : 'Article masqué.');
    }

    public function toggleVedette(int $id): RedirectResponse
    {
        $article = LughOwlArticle::findOrFail($id);
        if ($article->en_vedette) {
            $article->update(['en_vedette' => false, 'ordre' => 0]);
        } else {
            $maxOrdre = LughOwlArticle::where('categorie', $article->categorie)->where('en_vedette', true)->max('ordre') ?? -1;
            $article->update(['en_vedette' => true, 'ordre' => $maxOrdre + 1]);
        }
        return back();
    }

    public function move(Request $request, int $id): RedirectResponse
    {
        $direction = $request->input('direction');
        $article   = LughOwlArticle::findOrFail($id);

        $peers = LughOwlArticle::where('categorie', $article->categorie)
            ->where('en_vedette', true)
            ->orderBy('ordre')
            ->get()
            ->values();

        $idx = $peers->search(fn($a) => $a->id === $article->id);

        if ($direction === 'up' && $idx > 0) {
            $swap = $peers[$idx - 1];
        } elseif ($direction === 'down' && $idx < $peers->count() - 1) {
            $swap = $peers[$idx + 1];
        } else {
            return back();
        }

        // Normalize first
        foreach ($peers as $i => $peer) {
            $peer->update(['ordre' => $i]);
        }

        // Reload after normalize
        $peers = LughOwlArticle::where('categorie', $article->categorie)
            ->where('en_vedette', true)
            ->orderBy('ordre')
            ->get()
            ->values();

        $idx  = $peers->search(fn($a) => $a->id === $article->id);
        $swap = $direction === 'up' ? $peers[$idx - 1] : $peers[$idx + 1];

        [$a, $b] = [LughOwlArticle::find($article->id), LughOwlArticle::find($swap->id)];
        [$aOrdre, $bOrdre] = [$a->ordre, $b->ordre];
        $a->update(['ordre' => $bOrdre]);
        $b->update(['ordre' => $aOrdre]);

        return back();
    }

    private function validated(Request $request, ?int $excludeId = null): array
    {
        return $request->validate([
            'categorie'      => 'required|in:modeles,idees,vie',
            'titre'          => 'required|string|max:255',
            'titre_en'       => 'nullable|string|max:255',
            'description'    => 'required|string|max:1000',
            'description_en' => 'nullable|string|max:1000',
            'contenu'        => 'nullable|string',
            'contenu_en'     => 'nullable|string',
            'image'          => 'nullable|string|max:255',
            'image_file'     => 'nullable|image|max:10240',
            'publie'         => 'nullable|boolean',
        ]);
    }

    private function uniqueSlug(string $titre): string
    {
        $base = Str::slug($titre);
        $slug = $base;
        $i = 1;
        while (LughOwlArticle::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }

    private function uploadImage(Request $request): string
    {
        $file = $request->file('image_file');
        $name = $file->getClientOriginalName();
        $file->move(public_path('assets/Lugh-Owl'), $name);
        return $name;
    }
}
