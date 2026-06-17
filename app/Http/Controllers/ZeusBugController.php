<?php

namespace App\Http\Controllers;

use App\Models\ZeusBugArticle;
use Illuminate\View\View;

class ZeusBugController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()?->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    public function accueil(): View
    {
        $articles = ZeusBugArticle::where('publie', true)
            ->orderByRaw('date_projet IS NULL ASC')
            ->orderBy('date_projet', 'desc')
            ->get();

        return view('zeus-bug.accueil', [
            'locale'   => $this->locale(),
            'articles' => $articles,
        ]);
    }

    public function article(int $id): View
    {
        $article = ZeusBugArticle::where('publie', true)->findOrFail($id);

        return view('zeus-bug.article', [
            'locale'  => $this->locale(),
            'article' => $article,
        ]);
    }

    public function categorie(string $slug): View
    {
        $articles = ZeusBugArticle::where('publie', true)
            ->where('categorie', $slug)
            ->orderByRaw('date_projet IS NULL ASC')
            ->orderBy('date_projet', 'desc')
            ->get();

        return view('zeus-bug.accueil', [
            'locale'            => $this->locale(),
            'articles'          => $articles,
            'categorieActive'   => $slug,
        ]);
    }

    public function origines(): View
    {
        return view('zeus-bug.origines', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('zeus-bug.legal', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('zeus-bug.plan', ['locale' => $this->locale()]);
    }
}
