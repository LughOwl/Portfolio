<?php

namespace App\Http\Controllers;

use App\Models\GaiaDeerSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminGaiaDeerController extends Controller
{
    public function index(): View
    {
        $sections = GaiaDeerSection::orderBy('rubrique')->orderBy('ordre')->get()
            ->groupBy('rubrique');

        return view('admin.sites.gaia-deer', compact('sections'));
    }

    public function create(Request $request): View
    {
        $section  = null;
        $rubrique = $request->get('rubrique', 'sante');
        return view('admin.sites.gaia-deer-form', compact('section', 'rubrique'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'rubrique'   => 'required|in:sante,nutrition,investissement',
            'titre'      => 'required|string|max:255',
            'titre_en'   => 'nullable|string|max:255',
            'contenu'    => 'required|string',
            'contenu_en' => 'nullable|string',
            'publie'     => 'nullable|boolean',
        ]);

        $data['publie'] = $request->boolean('publie');
        $data['ordre']  = GaiaDeerSection::where('rubrique', $data['rubrique'])->max('ordre') + 1;

        GaiaDeerSection::create($data);

        return redirect()->route('admin.gaia-deer.index')
            ->with('success', 'Section créée.');
    }

    public function edit(int $id): View
    {
        $section  = GaiaDeerSection::findOrFail($id);
        $rubrique = $section->rubrique;
        return view('admin.sites.gaia-deer-form', compact('section', 'rubrique'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $section = GaiaDeerSection::findOrFail($id);

        $data = $request->validate([
            'rubrique'   => 'required|in:sante,nutrition,investissement',
            'titre'      => 'required|string|max:255',
            'titre_en'   => 'nullable|string|max:255',
            'contenu'    => 'required|string',
            'contenu_en' => 'nullable|string',
            'publie'     => 'nullable|boolean',
        ]);

        $data['publie'] = $request->boolean('publie');
        $section->update($data);

        return redirect()->route('admin.gaia-deer.index')
            ->with('success', 'Section mise à jour.');
    }

    public function destroy(int $id): RedirectResponse
    {
        GaiaDeerSection::findOrFail($id)->delete();
        return redirect()->route('admin.gaia-deer.index')
            ->with('success', 'Section supprimée.');
    }

    public function togglePublie(int $id): RedirectResponse
    {
        $s = GaiaDeerSection::findOrFail($id);
        $s->update(['publie' => !$s->publie]);
        return back();
    }

    public function move(Request $request, int $id): RedirectResponse
    {
        $section   = GaiaDeerSection::findOrFail($id);
        $direction = $request->input('direction');

        $siblings = GaiaDeerSection::where('rubrique', $section->rubrique)
            ->orderBy('ordre')
            ->get();

        $index = $siblings->search(fn($s) => $s->id === $section->id);

        if ($direction === 'up' && $index > 0) {
            $prev = $siblings[$index - 1];
            [$section->ordre, $prev->ordre] = [$prev->ordre, $section->ordre];
            $section->save();
            $prev->save();
        } elseif ($direction === 'down' && $index < $siblings->count() - 1) {
            $next = $siblings[$index + 1];
            [$section->ordre, $next->ordre] = [$next->ordre, $section->ordre];
            $section->save();
            $next->save();
        }

        return back();
    }
}
