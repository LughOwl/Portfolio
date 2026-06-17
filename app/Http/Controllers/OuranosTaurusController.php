<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OuranosTaurusController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()?->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    public function accueil(): View
    {
        return view('ouranos-taurus.accueil', ['locale' => $this->locale()]);
    }

    public function planetes(): View
    {
        return view('ouranos-taurus.planetes', ['locale' => $this->locale()]);
    }

    public function constellations(): View
    {
        return view('ouranos-taurus.constellations', ['locale' => $this->locale()]);
    }

    public function phenomenes(): View
    {
        return view('ouranos-taurus.phenomenes', ['locale' => $this->locale()]);
    }

    public function mythologie(): View
    {
        return view('ouranos-taurus.mythologie', ['locale' => $this->locale()]);
    }

    public function observer(): View
    {
        return view('ouranos-taurus.observer', ['locale' => $this->locale()]);
    }

    public function origines(): View
    {
        return view('ouranos-taurus.origines', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('ouranos-taurus.legal', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('ouranos-taurus.plan', ['locale' => $this->locale()]);
    }
}
