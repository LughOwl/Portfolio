<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Presentation;
use App\Models\Profil;
use App\Models\Projet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPortfolioController extends Controller
{
    private function shared(): array
    {
        return [
            'portfolioSections' => AdminController::PORTFOLIO_SECTIONS,
            'sites'             => AdminController::SITES,
        ];
    }

    /* -------------------------------------------------------
     | PRÉSENTATION
     * ----------------------------------------------------- */

    public function presentation(): View
    {
        $hero = Presentation::firstOrNew([]);
        return view('admin.portfolio.presentation', array_merge($this->shared(), ['hero' => $hero]));
    }

    public function presentationSave(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'subtitle'     => 'required|string|max:300',
            'availability' => 'required|string|max:300',
            'phrases'      => 'required|string',
        ]);

        $phrases = array_filter(array_map('trim', explode("\n", $r['phrases'])));

        $hero = Presentation::firstOrNew([]);
        $hero->fill([
            'subtitle'           => $r['subtitle'],
            'availability'       => $r['availability'],
            'typewriter_phrases' => array_values($phrases),
        ])->save();

        return back()->with('success', 'Présentation mise à jour.');
    }

    /* -------------------------------------------------------
     | PROFIL
     * ----------------------------------------------------- */

    public function profil(): View
    {
        $profil = Profil::firstOrNew([]);
        return view('admin.portfolio.profil', array_merge($this->shared(), ['profil' => $profil]));
    }

    public function profilSave(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'objectif'       => 'required|string',
            'infos.*.cle'    => 'required|string|max:100',
            'infos.*.type'   => 'required|in:val,lien',
            'infos.*.val'    => 'nullable|string|max:300',
            'infos.*.href'   => 'nullable|url|max:300',
            'infos.*.label'  => 'nullable|string|max:200',
        ]);

        $infos = [];
        foreach ($r['infos'] as $row) {
            $item = ['cle' => $row['cle']];
            if ($row['type'] === 'lien') {
                $item['lien'] = ['href' => $row['href'] ?? '', 'label' => $row['label'] ?? ''];
            } else {
                $item['val'] = $row['val'] ?? '';
            }
            $infos[] = $item;
        }

        $profil = Profil::firstOrNew([]);
        $profil->fill(['objectif' => $r['objectif'], 'infos' => $infos])->save();

        return back()->with('success', 'Profil mis à jour.');
    }

    /* -------------------------------------------------------
     | OBJECTIFS
     * ----------------------------------------------------- */

    public function objectifs(): View
    {
        $objectifs = Objectif::orderBy('priorite')->get();
        return view('admin.portfolio.objectifs', array_merge($this->shared(), ['objectifs' => $objectifs]));
    }

    public function objectifSave(Request $request, int $id): RedirectResponse
    {
        $r = $request->validate([
            'label_terme'     => 'required|string|max:100',
            'type'            => 'required|string|max:50',
            'titre'           => 'required|string|max:200',
            'badge_color'     => 'required|string|max:20',
            'details.*.cle'   => 'required|string|max:100',
            'details.*.val'   => 'required|string',
        ]);

        $details = [];
        foreach ($r['details'] as $d) {
            $details[] = ['cle' => $d['cle'], 'val' => $d['val']];
        }

        Objectif::findOrFail($id)->update([
            'label_terme' => $r['label_terme'],
            'type'        => $r['type'],
            'titre'       => $r['titre'],
            'badge_color' => $r['badge_color'],
            'details'     => $details,
        ]);

        return back()->with('success', 'Objectif mis à jour.');
    }

    /* -------------------------------------------------------
     | FORMATIONS
     * ----------------------------------------------------- */

    public function formations(): View
    {
        $formations    = Formation::orderBy('ordre')->get();
        $certifications = Certification::orderBy('ordre')->get();
        return view('admin.portfolio.formations', array_merge($this->shared(), [
            'formations'     => $formations,
            'certifications' => $certifications,
        ]));
    }

    public function formationStore(Request $request): RedirectResponse
    {
        $r = $this->validateTimeline($request);
        Formation::create(array_merge($r, ['ordre' => Formation::max('ordre') + 1]));
        return redirect()->route('admin.portfolio.formations')->with('success', 'Formation ajoutée.');
    }

    public function formationEdit(int $id): View
    {
        $item = Formation::findOrFail($id);
        return view('admin.portfolio.formation-form', array_merge($this->shared(), [
            'item' => $item, 'type' => 'formation',
        ]));
    }

    public function formationUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $this->validateTimeline($request);
        Formation::findOrFail($id)->update($r);
        return redirect()->route('admin.portfolio.formations')->with('success', 'Formation mise à jour.');
    }

    public function formationDestroy(int $id): RedirectResponse
    {
        Formation::findOrFail($id)->delete();
        return redirect()->route('admin.portfolio.formations')->with('success', 'Formation supprimée.');
    }

    public function certificationStore(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'nom'     => 'required|string|max:100',
            'couleur' => 'required|string|max:50',
            'desc'    => 'required|string|max:500',
        ]);
        Certification::create(array_merge($r, ['ordre' => Certification::max('ordre') + 1]));
        return redirect()->route('admin.portfolio.formations')->with('success', 'Certification ajoutée.');
    }

    public function certificationUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $request->validate([
            'nom'     => 'required|string|max:100',
            'couleur' => 'required|string|max:50',
            'desc'    => 'required|string|max:500',
        ]);
        Certification::findOrFail($id)->update($r);
        return redirect()->route('admin.portfolio.formations')->with('success', 'Certification mise à jour.');
    }

    public function certificationDestroy(int $id): RedirectResponse
    {
        Certification::findOrFail($id)->delete();
        return redirect()->route('admin.portfolio.formations')->with('success', 'Certification supprimée.');
    }

    /* -------------------------------------------------------
     | EXPÉRIENCES
     * ----------------------------------------------------- */

    public function experiences(): View
    {
        $experiences = Experience::orderBy('ordre')->get();
        return view('admin.portfolio.experiences', array_merge($this->shared(), ['experiences' => $experiences]));
    }

    public function experienceStore(Request $request): RedirectResponse
    {
        $r = $this->validateTimeline($request);
        Experience::create(array_merge($r, ['ordre' => Experience::max('ordre') + 1]));
        return redirect()->route('admin.portfolio.experiences')->with('success', 'Expérience ajoutée.');
    }

    public function experienceEdit(int $id): View
    {
        $item = Experience::findOrFail($id);
        return view('admin.portfolio.experience-form', array_merge($this->shared(), [
            'item' => $item, 'type' => 'experience',
        ]));
    }

    public function experienceUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $this->validateTimeline($request);
        Experience::findOrFail($id)->update($r);
        return redirect()->route('admin.portfolio.experiences')->with('success', 'Expérience mise à jour.');
    }

    public function experienceDestroy(int $id): RedirectResponse
    {
        Experience::findOrFail($id)->delete();
        return redirect()->route('admin.portfolio.experiences')->with('success', 'Expérience supprimée.');
    }

    /* -------------------------------------------------------
     | COMPÉTENCES
     * ----------------------------------------------------- */

    public function competences(): View
    {
        $competence = Competence::first();
        $json = $competence ? json_encode($competence->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '[]';
        return view('admin.portfolio.competences', array_merge($this->shared(), ['json' => $json]));
    }

    public function competencesSave(Request $request): RedirectResponse
    {
        $r = $request->validate(['data' => 'required|string']);

        $decoded = json_decode($r['data'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->withErrors(['data' => 'JSON invalide : ' . json_last_error_msg()])->withInput();
        }

        $competence = Competence::firstOrNew([]);
        $competence->data = $decoded;
        $competence->save();

        return back()->with('success', 'Compétences mises à jour.');
    }

    /* -------------------------------------------------------
     | PROJETS & SITES
     * ----------------------------------------------------- */

    public function projets(): View
    {
        $projets = Projet::orderBy('ordre')->get();
        return view('admin.portfolio.sites', array_merge($this->shared(), ['projets' => $projets]));
    }

    public function projetStore(Request $request): RedirectResponse
    {
        $r = $this->validateProjet($request);
        Projet::create(array_merge($r, ['ordre' => Projet::max('ordre') + 1]));
        return redirect()->route('admin.portfolio.sites')->with('success', 'Projet ajouté.');
    }

    public function projetEdit(int $id): View
    {
        $projet = Projet::findOrFail($id);
        return view('admin.portfolio.projet-form', array_merge($this->shared(), ['projet' => $projet]));
    }

    public function projetUpdate(Request $request, int $id): RedirectResponse
    {
        $r = $this->validateProjet($request);
        Projet::findOrFail($id)->update($r);
        return redirect()->route('admin.portfolio.sites')->with('success', 'Projet mis à jour.');
    }

    public function projetDestroy(int $id): RedirectResponse
    {
        Projet::findOrFail($id)->delete();
        return redirect()->route('admin.portfolio.sites')->with('success', 'Projet supprimé.');
    }

    /* -------------------------------------------------------
     | HELPERS
     * ----------------------------------------------------- */

    private function validateTimeline(Request $request): array
    {
        $r = $request->validate([
            'periode'      => 'required|string|max:100',
            'titre'        => 'required|string|max:200',
            'org'          => 'required|string|max:200',
            'desc'         => 'required|string',
            'dot'          => 'nullable|in:,blue,future',
            'tags.*.label' => 'nullable|string|max:100',
            'tags.*.couleur' => 'nullable|string|max:50',
        ]);

        $tags = [];
        foreach ($request->input('tags', []) as $tag) {
            if (!empty($tag['label'])) {
                $tags[] = ['label' => $tag['label'], 'couleur' => $tag['couleur'] ?? 'gray'];
            }
        }

        return [
            'periode' => $r['periode'],
            'titre'   => $r['titre'],
            'org'     => $r['org'],
            'desc'    => $r['desc'],
            'dot'     => $r['dot'] ?? '',
            'tags'    => $tags,
        ];
    }

    private function validateProjet(Request $request): array
    {
        return $request->validate([
            'nom'   => 'required|string|max:100',
            'sujet' => 'required|string|max:200',
            'desc'  => 'required|string',
            'logo'  => 'required|string|max:200',
            'color' => 'required|string|max:20',
            'route' => 'required|string|max:100',
            'etat'  => 'required|in:ligne,construction',
        ]);
    }
}
