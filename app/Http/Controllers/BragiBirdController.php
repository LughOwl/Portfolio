<?php

namespace App\Http\Controllers;

use App\Models\BragiBirdMorceau;
use Illuminate\View\View;

class BragiBirdController extends Controller
{
    private function locale(): string
    {
        return str_starts_with(request()->route()?->getName() ?? '', 'en.') ? 'en' : 'fr';
    }

    public function accueil(): View
    {
        $morceaux = BragiBirdMorceau::where('publie', true)
            ->orderBy('ordre')
            ->orderBy('id')
            ->get();

        return view('bragi-bird.accueil', [
            'locale'   => $this->locale(),
            'morceaux' => $morceaux,
        ]);
    }

    public function morceau(int $id): View
    {
        $morceau = BragiBirdMorceau::where('publie', true)->findOrFail($id);

        $prev = BragiBirdMorceau::where('publie', true)
            ->where(function ($q) use ($morceau) {
                $q->where('ordre', '<', $morceau->ordre)
                  ->orWhere(fn($q2) => $q2->where('ordre', $morceau->ordre)->where('id', '<', $morceau->id));
            })
            ->orderByDesc('ordre')->orderByDesc('id')
            ->first();

        $next = BragiBirdMorceau::where('publie', true)
            ->where(function ($q) use ($morceau) {
                $q->where('ordre', '>', $morceau->ordre)
                  ->orWhere(fn($q2) => $q2->where('ordre', $morceau->ordre)->where('id', '>', $morceau->id));
            })
            ->orderBy('ordre')->orderBy('id')
            ->first();

        return view('bragi-bird.morceau', [
            'locale'  => $this->locale(),
            'morceau' => $morceau,
            'prev'    => $prev,
            'next'    => $next,
        ]);
    }

    public function origines(): View
    {
        return view('bragi-bird.origines', ['locale' => $this->locale()]);
    }

    public function legal(): View
    {
        return view('bragi-bird.legal', ['locale' => $this->locale()]);
    }

    public function plan(): View
    {
        return view('bragi-bird.plan', ['locale' => $this->locale()]);
    }
}
