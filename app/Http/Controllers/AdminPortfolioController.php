<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Objectif;
use App\Models\Parametre;
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

    private function locale(Request $request): string
    {
        $l = $request->query('locale') ?? $request->input('locale', 'fr');
        return in_array($l, ['fr', 'en']) ? $l : 'fr';
    }

    private function redirectWithLocale(string $route, string $locale, string $msg): RedirectResponse
    {
        return redirect()->route($route, ['locale' => $locale])->with('success', $msg);
    }

    /* -------------------------------------------------------
     | PRÉSENTATION
     * ----------------------------------------------------- */

    public function presentation(Request $request): View
    {
        $locale = $this->locale($request);
        $hero   = Presentation::firstOrNew(['locale' => $locale]);
        return view('admin.portfolio.presentation', array_merge($this->shared(), [
            'hero'   => $hero,
            'locale' => $locale,
        ]));
    }

    public function presentationSave(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $request->validate([
            'subtitle'     => 'required|string|max:300',
            'availability' => 'required|string|max:300',
            'phrases'      => 'required|string',
        ]);

        $phrases = array_values(array_filter(array_map('trim', explode("\n", $r['phrases']))));

        $hero = Presentation::firstOrNew(['locale' => $locale]);
        $hero->fill([
            'locale'             => $locale,
            'subtitle'           => $r['subtitle'],
            'availability'       => $r['availability'],
            'typewriter_phrases' => $phrases,
        ])->save();

        return $this->redirectWithLocale('admin.portfolio.presentation', $locale, 'Présentation mise à jour.');
    }

    /* -------------------------------------------------------
     | PROFIL
     * ----------------------------------------------------- */

    public function profil(Request $request): View
    {
        $locale = $this->locale($request);
        $profil = Profil::firstOrNew(['locale' => $locale]);
        return view('admin.portfolio.profil', array_merge($this->shared(), [
            'profil' => $profil,
            'locale' => $locale,
        ]));
    }

    public function profilSave(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
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

        $profil = Profil::firstOrNew(['locale' => $locale]);
        $profil->fill(['locale' => $locale, 'objectif' => $r['objectif'], 'infos' => $infos])->save();

        return $this->redirectWithLocale('admin.portfolio.profil', $locale, 'Profil mis à jour.');
    }

    /* -------------------------------------------------------
     | OBJECTIFS
     * ----------------------------------------------------- */

    public function objectifs(Request $request): View
    {
        $locale    = $this->locale($request);
        $objectifs = Objectif::where('locale', $locale)->orderBy('priorite')->get();
        return view('admin.portfolio.objectifs', array_merge($this->shared(), [
            'objectifs' => $objectifs,
            'locale'    => $locale,
        ]));
    }

    public function objectifSave(Request $request, int $id): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
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

        return $this->redirectWithLocale('admin.portfolio.objectifs', $locale, 'Objectif mis à jour.');
    }

    /* -------------------------------------------------------
     | FORMATIONS
     * ----------------------------------------------------- */

    public function formations(Request $request): View
    {
        $locale         = $this->locale($request);
        $formations     = Formation::where('locale', $locale)->orderBy('ordre')->get();
        $certifications = Certification::where('locale', $locale)->orderBy('ordre')->get();
        return view('admin.portfolio.formations', array_merge($this->shared(), [
            'formations'     => $formations,
            'certifications' => $certifications,
            'locale'         => $locale,
        ]));
    }

    public function formationStore(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateTimeline($request);
        Formation::create(array_merge($r, [
            'locale' => $locale,
            'ordre'  => Formation::where('locale', $locale)->max('ordre') + 1,
        ]));
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Formation ajoutée.');
    }

    public function formationEdit(Request $request, int $id): View
    {
        $locale = $this->locale($request);
        $item   = Formation::findOrFail($id);
        return view('admin.portfolio.formation-form', array_merge($this->shared(), [
            'item'   => $item,
            'type'   => 'formation',
            'locale' => $locale,
        ]));
    }

    public function formationUpdate(Request $request, int $id): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateTimeline($request);
        Formation::findOrFail($id)->update($r);
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Formation mise à jour.');
    }

    public function formationDestroy(Request $request, int $id): RedirectResponse
    {
        $locale = $this->locale($request);
        Formation::findOrFail($id)->delete();
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Formation supprimée.');
    }

    public function certificationStore(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $request->validate([
            'nom'     => 'required|string|max:100',
            'couleur' => 'required|string|max:50',
            'desc'    => 'required|string|max:500',
        ]);
        Certification::create(array_merge($r, [
            'locale' => $locale,
            'ordre'  => Certification::where('locale', $locale)->max('ordre') + 1,
        ]));
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Certification ajoutée.');
    }

    public function certificationUpdate(Request $request, int $id): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $request->validate([
            'nom'     => 'required|string|max:100',
            'couleur' => 'required|string|max:50',
            'desc'    => 'required|string|max:500',
        ]);
        Certification::findOrFail($id)->update($r);
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Certification mise à jour.');
    }

    public function certificationDestroy(Request $request, int $id): RedirectResponse
    {
        $locale = $this->locale($request);
        Certification::findOrFail($id)->delete();
        return $this->redirectWithLocale('admin.portfolio.formations', $locale, 'Certification supprimée.');
    }

    /* -------------------------------------------------------
     | EXPÉRIENCES
     * ----------------------------------------------------- */

    public function experiences(Request $request): View
    {
        $locale      = $this->locale($request);
        $experiences = Experience::where('locale', $locale)->orderBy('ordre')->get();
        return view('admin.portfolio.experiences', array_merge($this->shared(), [
            'experiences' => $experiences,
            'locale'      => $locale,
        ]));
    }

    public function experienceStore(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateTimeline($request);
        Experience::create(array_merge($r, [
            'locale' => $locale,
            'ordre'  => Experience::where('locale', $locale)->max('ordre') + 1,
        ]));
        return $this->redirectWithLocale('admin.portfolio.experiences', $locale, 'Expérience ajoutée.');
    }

    public function experienceEdit(Request $request, int $id): View
    {
        $locale = $this->locale($request);
        $item   = Experience::findOrFail($id);
        return view('admin.portfolio.experience-form', array_merge($this->shared(), [
            'item'   => $item,
            'type'   => 'experience',
            'locale' => $locale,
        ]));
    }

    public function experienceUpdate(Request $request, int $id): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateTimeline($request);
        Experience::findOrFail($id)->update($r);
        return $this->redirectWithLocale('admin.portfolio.experiences', $locale, 'Expérience mise à jour.');
    }

    public function experienceDestroy(Request $request, int $id): RedirectResponse
    {
        $locale = $this->locale($request);
        Experience::findOrFail($id)->delete();
        return $this->redirectWithLocale('admin.portfolio.experiences', $locale, 'Expérience supprimée.');
    }

    /* -------------------------------------------------------
     | COMPÉTENCES
     * ----------------------------------------------------- */

    public function competences(Request $request): View
    {
        $locale     = $this->locale($request);
        $competence = Competence::where('locale', $locale)->first();
        $data       = $competence ? $competence->data : [];
        return view('admin.portfolio.competences', array_merge($this->shared(), [
            'categories' => $data,
            'locale'     => $locale,
        ]));
    }

    public function competencesSave(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $cats   = $request->input('cats', []);
        $data   = [];

        foreach ($cats as $cat) {
            if (empty($cat['id'])) {
                continue;
            }
            $entry = [
                'id'   => $cat['id'],
                'type' => $cat['type'] ?? 'bars',
            ];
            if (!empty($cat['titre'])) {
                $entry['titre'] = $cat['titre'];
            }
            if (!empty($cat['highlight'])) {
                $entry['highlight'] = true;
            }

            if ($entry['type'] === 'two-col') {
                $entry['cols'] = [];
                foreach ($cat['cols'] ?? [] as $col) {
                    $colEntry = [
                        'titre' => $col['titre'] ?? '',
                        'type'  => $col['type'] ?? 'tags',
                    ];
                    if ($colEntry['type'] === 'tags') {
                        $colEntry['tags'] = array_values(array_filter(
                            $col['tags'] ?? [],
                            fn($t) => !empty($t['label'])
                        ));
                    } else {
                        $colEntry['items'] = array_values(array_filter(
                            $col['items'] ?? [],
                            fn($i) => !empty($i['nom'])
                        ));
                    }
                    $entry['cols'][] = $colEntry;
                }
            } else {
                $entry['items'] = array_values(array_filter(
                    $cat['items'] ?? [],
                    fn($i) => !empty($i['nom'])
                ));
                if ($entry['type'] === 'bars_and_tags') {
                    $entry['tags'] = array_values(array_filter(
                        $cat['tags'] ?? [],
                        fn($t) => !empty($t['label'])
                    ));
                }
            }

            $data[] = $entry;
        }

        $competence = Competence::firstOrNew(['locale' => $locale]);
        $competence->locale = $locale;
        $competence->data   = $data;
        $competence->save();

        return $this->redirectWithLocale('admin.portfolio.competences', $locale, 'Compétences mises à jour.');
    }

    /* -------------------------------------------------------
     | PROJETS & SITES
     * ----------------------------------------------------- */

    public function projets(Request $request): View
    {
        $locale  = $this->locale($request);
        $projets = Projet::where('locale', $locale)->orderBy('ordre')->get();
        return view('admin.portfolio.sites', array_merge($this->shared(), [
            'projets' => $projets,
            'locale'  => $locale,
        ]));
    }

    public function projetStore(Request $request): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateProjet($request);
        Projet::create(array_merge($r, [
            'locale' => $locale,
            'ordre'  => Projet::where('locale', $locale)->max('ordre') + 1,
        ]));
        return $this->redirectWithLocale('admin.portfolio.sites', $locale, 'Projet ajouté.');
    }

    public function projetEdit(Request $request, int $id): View
    {
        $locale = $this->locale($request);
        $projet = Projet::findOrFail($id);
        return view('admin.portfolio.projet-form', array_merge($this->shared(), [
            'projet'  => $projet,
            'locale'  => $locale,
        ]));
    }

    public function projetUpdate(Request $request, int $id): RedirectResponse
    {
        $locale = $request->input('locale', 'fr');
        $r = $this->validateProjet($request);
        Projet::findOrFail($id)->update($r);
        return $this->redirectWithLocale('admin.portfolio.sites', $locale, 'Projet mis à jour.');
    }

    public function projetDestroy(Request $request, int $id): RedirectResponse
    {
        $locale = $this->locale($request);
        Projet::findOrFail($id)->delete();
        return $this->redirectWithLocale('admin.portfolio.sites', $locale, 'Projet supprimé.');
    }

    /* -------------------------------------------------------
     | HELPERS
     * ----------------------------------------------------- */

    private function validateTimeline(Request $request): array
    {
        $r = $request->validate([
            'periode'        => 'required|string|max:100',
            'titre'          => 'required|string|max:200',
            'org'            => 'required|string|max:200',
            'desc'           => 'required|string',
            'dot'            => 'nullable|in:,blue,future',
            'tags.*.label'   => 'nullable|string|max:100',
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

    /* -------------------------------------------------------
     | PARAMÈTRES GLOBAUX
     * ----------------------------------------------------- */

    public function parametres(): View
    {
        return view('admin.portfolio.parametres', array_merge($this->shared(), [
            'p' => Parametre::all_settings(),
        ]));
    }

    public function parametresSave(Request $request): RedirectResponse
    {
        $r = $request->validate([
            'github_url'        => 'required|url|max:300',
            'linkedin_url'      => 'required|url|max:300',
            'tryhackme_url'     => 'required|url|max:300',
            'contact_ouvert'    => 'nullable|in:0,1',
            'contact_statut_fr' => 'required|string|max:600',
            'contact_statut_en' => 'required|string|max:600',
        ]);

        $r['contact_ouvert'] = $request->has('contact_ouvert') ? '1' : '0';

        foreach ($r as $cle => $valeur) {
            Parametre::set($cle, $valeur);
        }

        return redirect()->route('admin.portfolio.parametres')->with('success', 'Paramètres enregistrés.');
    }
}
