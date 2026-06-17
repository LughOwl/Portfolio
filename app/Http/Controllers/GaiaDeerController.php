<?php

namespace App\Http\Controllers;

use App\Models\GaiaDeerSection;
use Illuminate\View\View;

class GaiaDeerController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    public function accueil(): View
    {
        return view('gaia-deer.accueil', ['locale' => $this->locale()]);
    }

    public function sante(): View
    {
        $sections = GaiaDeerSection::where('rubrique', 'sante')
            ->where('publie', true)->orderBy('ordre')->get();
        return view('gaia-deer.sante', ['locale' => $this->locale(), 'sections' => $sections]);
    }

    public function nutrition(): View
    {
        $sections = GaiaDeerSection::where('rubrique', 'nutrition')
            ->where('publie', true)->orderBy('ordre')->get();
        return view('gaia-deer.nutrition', ['locale' => $this->locale(), 'sections' => $sections]);
    }

    public function investissement(): View
    {
        $sections = GaiaDeerSection::where('rubrique', 'investissement')
            ->where('publie', true)->orderBy('ordre')->get();
        return view('gaia-deer.investissement', ['locale' => $this->locale(), 'sections' => $sections]);
    }

    public function origines(): View
    {
        return view('gaia-deer.origines', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('gaia-deer.legal', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('gaia-deer.plan', ['locale' => $this->locale()]);
    }
}
