<?php

namespace App\Http\Controllers;

use App\Models\BragiBirdMorceau;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminBragiBirdController extends Controller
{
    public function index(): View
    {
        $morceaux = BragiBirdMorceau::orderBy('ordre')->orderBy('id')->get();
        return view('admin.sites.bragi-bird-admin', [
            'morceaux'          => $morceaux,
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function create(): View
    {
        return view('admin.sites.bragi-bird-form', [
            'morceau'           => null,
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['ordre'] = BragiBirdMorceau::max('ordre') + 1;

        if ($request->hasFile('mp3_file')) {
            $data['mp3_path'] = $this->uploadMp3($request);
        }

        BragiBirdMorceau::create($data);

        return redirect()->route('admin.bragi-bird.index')->with('success', 'Morceau créé.');
    }

    public function edit(int $id): View
    {
        $morceau = BragiBirdMorceau::findOrFail($id);
        return view('admin.sites.bragi-bird-form', [
            'morceau'           => $morceau,
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $morceau = BragiBirdMorceau::findOrFail($id);
        $data = $this->validated($request);

        if ($request->hasFile('mp3_file')) {
            $data['mp3_path'] = $this->uploadMp3($request);
        }

        $morceau->update($data);

        return redirect()->route('admin.bragi-bird.index')->with('success', 'Morceau mis à jour.');
    }

    public function destroy(int $id): RedirectResponse
    {
        BragiBirdMorceau::findOrFail($id)->delete();
        return redirect()->route('admin.bragi-bird.index')->with('success', 'Morceau supprimé.');
    }

    public function togglePublie(int $id): RedirectResponse
    {
        $morceau = BragiBirdMorceau::findOrFail($id);
        $morceau->update(['publie' => !$morceau->publie]);
        return back()->with('success', $morceau->publie ? 'Morceau publié.' : 'Morceau masqué.');
    }

    public function move(Request $request, int $id): RedirectResponse
    {
        $direction = $request->input('direction');
        $morceau   = BragiBirdMorceau::findOrFail($id);

        $peers = BragiBirdMorceau::orderBy('ordre')->orderBy('id')->get()->values();
        $idx   = $peers->search(fn($m) => $m->id === $morceau->id);

        if ($direction === 'up' && $idx > 0) {
            $swap = $peers[$idx - 1];
        } elseif ($direction === 'down' && $idx < $peers->count() - 1) {
            $swap = $peers[$idx + 1];
        } else {
            return back();
        }

        foreach ($peers as $i => $peer) {
            $peer->update(['ordre' => $i]);
        }

        $peers = BragiBirdMorceau::orderBy('ordre')->orderBy('id')->get()->values();
        $idx   = $peers->search(fn($m) => $m->id === $morceau->id);
        $swap  = $direction === 'up' ? $peers[$idx - 1] : $peers[$idx + 1];

        [$a, $b] = [BragiBirdMorceau::find($morceau->id), BragiBirdMorceau::find($swap->id)];
        [$aOrdre, $bOrdre] = [$a->ordre, $b->ordre];
        $a->update(['ordre' => $bOrdre]);
        $b->update(['ordre' => $aOrdre]);

        return back();
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'titre'          => 'required|string|max:255',
            'titre_en'       => 'nullable|string|max:255',
            'compositeur'    => 'required|string|max:255',
            'compositeur_en' => 'nullable|string|max:255',
            'description'    => 'nullable|string',
            'description_en' => 'nullable|string',
            'youtube_url'    => 'nullable|url|max:500',
            'mp3_path'       => 'nullable|string|max:500',
            'mp3_file'       => 'nullable|file|mimes:mp3,mpeg,mpga|max:51200',
            'publie'         => 'nullable|boolean',
        ]);
    }

    private function uploadMp3(Request $request): string
    {
        $file = $request->file('mp3_file');
        $path = $file->store('bragi-bird/mp3', 'public');
        return $path;
    }
}
