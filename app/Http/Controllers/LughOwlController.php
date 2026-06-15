<?php

namespace App\Http\Controllers;

use App\Data\LughOwlData;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LughOwlController extends Controller
{

    public function accueil(): View
    {
        return view('lugh-owl.accueil');
    }

    public function modeles(): View
    {
        return view('lugh-owl.modeles');
    }

    public function idees(): View
    {
        return view('lugh-owl.idees');
    }

    public function vie(): View
    {
        return view('lugh-owl.vie');
    }

    public function article(string $slug): View
    {
        if (in_array($slug, LughOwlData::MODELES)) {
            return view("lugh-owl.modele.{$slug}");
        }
        if (in_array($slug, LughOwlData::IDEES)) {
            return view("lugh-owl.idee.{$slug}");
        }
        if (in_array($slug, LughOwlData::VIE)) {
            return view("lugh-owl.vie.{$slug}");
        }
        abort(404);
    }

    public function recherche(Request $request): View
    {
        $q = trim($request->get('q', ''));
        $resultats = [];

        if (mb_strlen($q) >= 2) {
            $q_low = mb_strtolower($q);
            $resultats = array_values(array_filter(LughOwlData::articles(), function (array $a) use ($q_low): bool {
                return str_contains(mb_strtolower($a['titre']), $q_low)
                    || str_contains(mb_strtolower($a['description']), $q_low);
            }));
        }

        return view('lugh-owl.recherche', compact('q', 'resultats'));
    }

    public function origines(): View
    {
        return view('lugh-owl.origines');
    }

    public function plan(): View
    {
        return view('lugh-owl.plan');
    }

    public function legal(): View
    {
        return view('lugh-owl.legal');
    }
}
