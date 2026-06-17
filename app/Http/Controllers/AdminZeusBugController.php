<?php

namespace App\Http\Controllers;

use App\Models\ZeusBugArticle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminZeusBugController extends Controller
{
    public function index(): View
    {
        $articles = ZeusBugArticle::orderBy('ordre')->get()
            ->groupBy('categorie');

        return view('admin.sites.zeus-bug', compact('articles'));
    }

    public function create(Request $request): View
    {
        $article   = null;
        $categorie = $request->get('categorie', 'web');
        return view('admin.sites.zeus-bug-form', compact('article', 'categorie'));
    }

    public function store(Request $request): RedirectResponse
    {
        $categories = array_keys(ZeusBugArticle::$categories);

        $data = $request->validate([
            'titre'      => 'required|string|max:255',
            'titre_en'   => 'nullable|string|max:255',
            'intro'      => 'required|string',
            'intro_en'   => 'nullable|string',
            'contenu'    => 'required|string',
            'contenu_en' => 'nullable|string',
            'categorie'  => 'required|in:' . implode(',', $categories),
            'tags'       => 'nullable|string|max:255',
            'github_url' => 'nullable|url|max:255',
            'date_projet'=> 'nullable|date',
            'publie'     => 'nullable|boolean',
        ]);

        $data['publie'] = $request->boolean('publie');
        $data['ordre']  = ZeusBugArticle::max('ordre') + 1;

        ZeusBugArticle::create($data);

        return redirect()->route('admin.zeus-bug.index')
            ->with('success', 'Article créé.');
    }

    public function edit(int $id): View
    {
        $article   = ZeusBugArticle::findOrFail($id);
        $categorie = $article->categorie;
        return view('admin.sites.zeus-bug-form', compact('article', 'categorie'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $article    = ZeusBugArticle::findOrFail($id);
        $categories = array_keys(ZeusBugArticle::$categories);

        $data = $request->validate([
            'titre'      => 'required|string|max:255',
            'titre_en'   => 'nullable|string|max:255',
            'intro'      => 'required|string',
            'intro_en'   => 'nullable|string',
            'contenu'    => 'required|string',
            'contenu_en' => 'nullable|string',
            'categorie'  => 'required|in:' . implode(',', $categories),
            'tags'       => 'nullable|string|max:255',
            'github_url' => 'nullable|url|max:255',
            'date_projet'=> 'nullable|date',
            'publie'     => 'nullable|boolean',
        ]);

        $data['publie'] = $request->boolean('publie');
        $article->update($data);

        return redirect()->route('admin.zeus-bug.index')
            ->with('success', 'Article mis à jour.');
    }

    public function destroy(int $id): RedirectResponse
    {
        ZeusBugArticle::findOrFail($id)->delete();
        return redirect()->route('admin.zeus-bug.index')
            ->with('success', 'Article supprimé.');
    }

    public function togglePublie(int $id): RedirectResponse
    {
        $a = ZeusBugArticle::findOrFail($id);
        $a->update(['publie' => !$a->publie]);
        return back();
    }

    public function move(Request $request, int $id): RedirectResponse
    {
        $article   = ZeusBugArticle::findOrFail($id);
        $direction = $request->input('direction');

        $all   = ZeusBugArticle::orderBy('ordre')->get();
        $index = $all->search(fn($a) => $a->id === $article->id);

        if ($direction === 'up' && $index > 0) {
            $prev = $all[$index - 1];
            [$article->ordre, $prev->ordre] = [$prev->ordre, $article->ordre];
            $article->save();
            $prev->save();
        } elseif ($direction === 'down' && $index < $all->count() - 1) {
            $next = $all[$index + 1];
            [$article->ordre, $next->ordre] = [$next->ordre, $article->ordre];
            $article->save();
            $next->save();
        }

        return back();
    }
}
