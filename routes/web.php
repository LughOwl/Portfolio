<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminBragiBirdController;
use App\Http\Controllers\AdminInariFoxController;
use App\Http\Controllers\AdminGaiaDeerController;
use App\Http\Controllers\AdminJanusBeeController;
use App\Http\Controllers\AdminLughOwlController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminZeusBugController;
use App\Http\Controllers\BragiBirdController;
use App\Http\Controllers\InariFoxController;
use App\Http\Controllers\ZeusBugController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaiaDeerController;
use App\Http\Controllers\OuranosTaurusController;
use App\Http\Controllers\JanusBeeController;
use App\Http\Controllers\LughOwlController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/fr');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/robots.txt', function () {
    return response(
        "User-agent: *\nAllow: /\nSitemap: " . route('sitemap') . "\n",
        200
    )->header('Content-Type', 'text/plain');
})->name('robots');

/* -------------------------------------------------------
 | Portfolio FR
 * ----------------------------------------------------- */
Route::prefix('fr')->name('fr.')->group(function () {

    Route::get('/', [PortfolioController::class, 'fr'])->name('home');

    foreach (['presentation','profil','parcours','sites','contact','plan','legal'] as $page) {
        Route::get("/{$page}", [PortfolioController::class, 'fr'])
            ->defaults('page', $page)
            ->name($page);
    }

    Route::post('/contact', [ContactController::class, 'sendFr'])->name('contact.send');

    // Janus-Bee
    Route::prefix('janus-bee')->name('janus-bee.')->group(function () {
        Route::get('/',           [JanusBeeController::class, 'accueil'])->name('accueil');
        Route::get('/catalogue',  [JanusBeeController::class, 'catalogue'])->name('catalogue');
        Route::get('/origines',   [JanusBeeController::class, 'origines'])->name('origines');
        Route::get('/plan',       [JanusBeeController::class, 'plan'])->name('plan');
        Route::get('/legal',      [JanusBeeController::class, 'legal'])->name('legal');
        Route::get('/{oeuvre}',   [JanusBeeController::class, 'oeuvre'])->name('oeuvre');
    });

    // Lugh-Owl
    Route::prefix('lugh-owl')->name('lugh-owl.')->group(function () {
        Route::get('/',          [LughOwlController::class, 'accueil'])->name('accueil');
        Route::get('/catalogue', [LughOwlController::class, 'catalogue'])->name('catalogue');
        Route::get('/recherche', [LughOwlController::class, 'recherche'])->name('recherche');
        Route::get('/origines',  [LughOwlController::class, 'origines'])->name('origines');
        Route::get('/plan',      [LughOwlController::class, 'plan'])->name('plan');
        Route::get('/legal',     [LughOwlController::class, 'legal'])->name('legal');
        Route::get('/{slug}',    [LughOwlController::class, 'article'])->name('article');
    });

    // Gaïa-Deer
    Route::prefix('gaia-deer')->name('gaia-deer.')->group(function () {
        Route::get('/',                [GaiaDeerController::class, 'accueil'])->name('accueil');
        Route::get('/sante',           [GaiaDeerController::class, 'sante'])->name('sante');
        Route::get('/nutrition',       [GaiaDeerController::class, 'nutrition'])->name('nutrition');
        Route::get('/investissement',  [GaiaDeerController::class, 'investissement'])->name('investissement');
        Route::get('/origines',        [GaiaDeerController::class, 'origines'])->name('origines');
        Route::get('/plan',            [GaiaDeerController::class, 'plan'])->name('plan');
        Route::get('/legal',           [GaiaDeerController::class, 'legal'])->name('legal');
    });

    // Ouranos-Taurus
    Route::prefix('ouranos-taurus')->name('ouranos-taurus.')->group(function () {
        Route::get('/',                [OuranosTaurusController::class, 'accueil'])->name('accueil');
        Route::get('/planetes',        [OuranosTaurusController::class, 'planetes'])->name('planetes');
        Route::get('/constellations',  [OuranosTaurusController::class, 'constellations'])->name('constellations');
        Route::get('/phenomenes',      [OuranosTaurusController::class, 'phenomenes'])->name('phenomenes');
        Route::get('/mythologie',      [OuranosTaurusController::class, 'mythologie'])->name('mythologie');
        Route::get('/observer',        [OuranosTaurusController::class, 'observer'])->name('observer');
        Route::get('/origines',        [OuranosTaurusController::class, 'origines'])->name('origines');
        Route::get('/plan',            [OuranosTaurusController::class, 'plan'])->name('plan');
        Route::get('/legal',           [OuranosTaurusController::class, 'legal'])->name('legal');
    });

    // Zeus-Bug FR
    Route::prefix('zeus-bug')->name('zeus-bug.')->group(function () {
        Route::get('/',                    [ZeusBugController::class, 'accueil'])->name('accueil');
        Route::get('/article/{id}',        [ZeusBugController::class, 'article'])->name('article');
        Route::get('/categorie/{slug}',    [ZeusBugController::class, 'categorie'])->name('categorie');
        Route::get('/origines',            [ZeusBugController::class, 'origines'])->name('origines');
        Route::get('/plan',                [ZeusBugController::class, 'plan'])->name('plan');
        Route::get('/legal',               [ZeusBugController::class, 'legal'])->name('legal');
    });

    // Bragi Bird FR
    Route::prefix('bragi-bird')->name('bragi-bird.')->group(function () {
        Route::get('/',              [BragiBirdController::class, 'accueil'])->name('accueil');
        Route::get('/morceau/{id}',  [BragiBirdController::class, 'morceau'])->name('morceau');
        Route::get('/origines',      [BragiBirdController::class, 'origines'])->name('origines');
        Route::get('/plan',          [BragiBirdController::class, 'plan'])->name('plan');
        Route::get('/legal',         [BragiBirdController::class, 'legal'])->name('legal');
    });

    // Inari-Fox FR
    Route::prefix('inari-fox')->name('inari-fox.')->group(function () {
        Route::get('/',                  [InariFoxController::class, 'accueil'])->defaults('locale', 'fr')->name('accueil');
        Route::get('/recettes',          [InariFoxController::class, 'recettes'])->defaults('locale', 'fr')->name('recettes');
        Route::get('/aleatoire',         [InariFoxController::class, 'random'])->defaults('locale', 'fr')->name('random');
        Route::get('/recettes/{slug}/pdf', [InariFoxController::class, 'pdf'])->defaults('locale', 'fr')->name('recette.pdf');
        Route::get('/recettes/{slug}',   [InariFoxController::class, 'recette'])->defaults('locale', 'fr')->name('recette');
        Route::get('/origines',          [InariFoxController::class, 'origines'])->defaults('locale', 'fr')->name('origines');
        Route::get('/plan',              [InariFoxController::class, 'plan'])->defaults('locale', 'fr')->name('plan');
        Route::get('/legal',             [InariFoxController::class, 'legal'])->defaults('locale', 'fr')->name('legal');
    });

    // Entrée admin FR
    Route::get('/nico-admin', fn() => auth()->check()
        ? redirect()->route('admin.dashboard')
        : redirect()->route('login')
    )->name('nico-admin');
});

/* -------------------------------------------------------
 | Portfolio EN
 * ----------------------------------------------------- */
Route::prefix('en')->name('en.')->group(function () {

    Route::get('/', [PortfolioController::class, 'en'])->name('home');

    foreach (['presentation','profil','parcours','websites','contact','sitemap','termsofuse'] as $page) {
        Route::get("/{$page}", [PortfolioController::class, 'en'])
            ->defaults('page', $page)
            ->name($page);
    }

    Route::post('/contact', [ContactController::class, 'sendEn'])->name('contact.send');

    // Janus-Bee EN
    Route::prefix('janus-bee')->name('janus-bee.')->group(function () {
        Route::get('/',           [JanusBeeController::class, 'accueil'])->name('accueil');
        Route::get('/catalogue',  [JanusBeeController::class, 'catalogue'])->name('catalogue');
        Route::get('/origins',    [JanusBeeController::class, 'origines'])->name('origines');
        Route::get('/sitemap',    [JanusBeeController::class, 'plan'])->name('plan');
        Route::get('/legal',      [JanusBeeController::class, 'legal'])->name('legal');
        Route::get('/{oeuvre}',   [JanusBeeController::class, 'oeuvre'])->name('oeuvre');
    });

    // Lugh-Owl EN
    Route::prefix('lugh-owl')->name('lugh-owl.')->group(function () {
        Route::get('/',          [LughOwlController::class, 'accueil'])->name('accueil');
        Route::get('/catalogue', [LughOwlController::class, 'catalogue'])->name('catalogue');
        Route::get('/search',    [LughOwlController::class, 'recherche'])->name('recherche');
        Route::get('/origins',   [LughOwlController::class, 'origines'])->name('origines');
        Route::get('/sitemap',   [LughOwlController::class, 'plan'])->name('plan');
        Route::get('/legal',     [LughOwlController::class, 'legal'])->name('legal');
        Route::get('/{slug}',    [LughOwlController::class, 'article'])->name('article');
    });

    // Gaïa-Deer EN
    Route::prefix('gaia-deer')->name('gaia-deer.')->group(function () {
        Route::get('/',          [GaiaDeerController::class, 'accueil'])->name('accueil');
        Route::get('/health',    [GaiaDeerController::class, 'sante'])->name('sante');
        Route::get('/nutrition', [GaiaDeerController::class, 'nutrition'])->name('nutrition');
        Route::get('/investing', [GaiaDeerController::class, 'investissement'])->name('investissement');
        Route::get('/origins',   [GaiaDeerController::class, 'origines'])->name('origines');
        Route::get('/sitemap',   [GaiaDeerController::class, 'plan'])->name('plan');
        Route::get('/legal',     [GaiaDeerController::class, 'legal'])->name('legal');
    });

    // Ouranos-Taurus EN
    Route::prefix('ouranos-taurus')->name('ouranos-taurus.')->group(function () {
        Route::get('/',                [OuranosTaurusController::class, 'accueil'])->name('accueil');
        Route::get('/planets',         [OuranosTaurusController::class, 'planetes'])->name('planetes');
        Route::get('/constellations',  [OuranosTaurusController::class, 'constellations'])->name('constellations');
        Route::get('/phenomena',       [OuranosTaurusController::class, 'phenomenes'])->name('phenomenes');
        Route::get('/mythology',       [OuranosTaurusController::class, 'mythologie'])->name('mythologie');
        Route::get('/observe',         [OuranosTaurusController::class, 'observer'])->name('observer');
        Route::get('/origins',         [OuranosTaurusController::class, 'origines'])->name('origines');
        Route::get('/sitemap',         [OuranosTaurusController::class, 'plan'])->name('plan');
        Route::get('/legal',           [OuranosTaurusController::class, 'legal'])->name('legal');
    });

    // Zeus-Bug EN
    Route::prefix('zeus-bug')->name('zeus-bug.')->group(function () {
        Route::get('/',                    [ZeusBugController::class, 'accueil'])->name('accueil');
        Route::get('/article/{id}',        [ZeusBugController::class, 'article'])->name('article');
        Route::get('/category/{slug}',     [ZeusBugController::class, 'categorie'])->name('categorie');
        Route::get('/origins',             [ZeusBugController::class, 'origines'])->name('origines');
        Route::get('/sitemap',             [ZeusBugController::class, 'plan'])->name('plan');
        Route::get('/legal',               [ZeusBugController::class, 'legal'])->name('legal');
    });

    // Bragi Bird EN
    Route::prefix('bragi-bird')->name('bragi-bird.')->group(function () {
        Route::get('/',             [BragiBirdController::class, 'accueil'])->name('accueil');
        Route::get('/piece/{id}',   [BragiBirdController::class, 'morceau'])->name('morceau');
        Route::get('/origins',      [BragiBirdController::class, 'origines'])->name('origines');
        Route::get('/sitemap',      [BragiBirdController::class, 'plan'])->name('plan');
        Route::get('/legal',        [BragiBirdController::class, 'legal'])->name('legal');
    });

    // Inari-Fox EN
    Route::prefix('inari-fox')->name('inari-fox.')->group(function () {
        Route::get('/',                  [InariFoxController::class, 'accueil'])->defaults('locale', 'en')->name('accueil');
        Route::get('/recipes',           [InariFoxController::class, 'recettes'])->defaults('locale', 'en')->name('recettes');
        Route::get('/random',            [InariFoxController::class, 'random'])->defaults('locale', 'en')->name('random');
        Route::get('/recipes/{slug}/pdf', [InariFoxController::class, 'pdf'])->defaults('locale', 'en')->name('recette.pdf');
        Route::get('/recipes/{slug}',    [InariFoxController::class, 'recette'])->defaults('locale', 'en')->name('recette');
        Route::get('/origins',           [InariFoxController::class, 'origines'])->defaults('locale', 'en')->name('origines');
        Route::get('/sitemap',           [InariFoxController::class, 'plan'])->defaults('locale', 'en')->name('plan');
        Route::get('/legal',             [InariFoxController::class, 'legal'])->defaults('locale', 'en')->name('legal');
    });

    // Entrée admin EN
    Route::get('/nico-admin', fn() => auth()->check()
        ? redirect()->route('admin.dashboard')
        : redirect()->route('login')
    )->name('nico-admin');
});

/* -------------------------------------------------------
 | Admin panel
 * ----------------------------------------------------- */
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Janus-Bee — CRUD oeuvres
    Route::prefix('sites/janus-bee')->name('janus-bee.')->group(function () {
        Route::get('/',              [AdminJanusBeeController::class, 'index'])->name('index');
        Route::get('/create',        [AdminJanusBeeController::class, 'create'])->name('create');
        Route::post('/',             [AdminJanusBeeController::class, 'store'])->name('store');
        Route::get('/{id}/edit',     [AdminJanusBeeController::class, 'edit'])->name('edit');
        Route::put('/{id}',          [AdminJanusBeeController::class, 'update'])->name('update');
        Route::delete('/{id}',       [AdminJanusBeeController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/vedette', [AdminJanusBeeController::class, 'toggleVedette'])->name('vedette');
        Route::post('/reorder',      [AdminJanusBeeController::class, 'reorder'])->name('reorder');
        Route::post('/{id}/move',    [AdminJanusBeeController::class, 'move'])->name('move');
        Route::post('/types',          [AdminJanusBeeController::class, 'typeStore'])->name('type.store');
        Route::put('/types/{id}',      [AdminJanusBeeController::class, 'typeUpdate'])->name('type.update');
        Route::delete('/types/{id}',   [AdminJanusBeeController::class, 'typeDestroy'])->name('type.destroy');
        Route::post('/genres',         [AdminJanusBeeController::class, 'genreStore'])->name('genre.store');
        Route::put('/genres/{id}',     [AdminJanusBeeController::class, 'genreUpdate'])->name('genre.update');
        Route::delete('/genres/{id}',  [AdminJanusBeeController::class, 'genreDestroy'])->name('genre.destroy');
    });

    // Gaïa-Deer — CRUD sections
    Route::prefix('sites/gaia-deer')->name('gaia-deer.')->group(function () {
        Route::get('/',                      [AdminGaiaDeerController::class, 'index'])->name('index');
        Route::get('/sections/create',       [AdminGaiaDeerController::class, 'create'])->name('section.create');
        Route::post('/sections',             [AdminGaiaDeerController::class, 'store'])->name('section.store');
        Route::get('/sections/{id}/edit',    [AdminGaiaDeerController::class, 'edit'])->name('section.edit');
        Route::put('/sections/{id}',         [AdminGaiaDeerController::class, 'update'])->name('section.update');
        Route::delete('/sections/{id}',      [AdminGaiaDeerController::class, 'destroy'])->name('section.destroy');
        Route::post('/sections/{id}/publie', [AdminGaiaDeerController::class, 'togglePublie'])->name('section.publie');
        Route::post('/sections/{id}/move',   [AdminGaiaDeerController::class, 'move'])->name('section.move');
    });

    // Lugh-Owl — CRUD articles
    Route::prefix('sites/lugh-owl')->name('lugh-owl.')->group(function () {
        Route::get('/',              [AdminLughOwlController::class, 'index'])->name('index');
        Route::get('/create',        [AdminLughOwlController::class, 'create'])->name('create');
        Route::post('/',             [AdminLughOwlController::class, 'store'])->name('store');
        Route::get('/{id}/edit',     [AdminLughOwlController::class, 'edit'])->name('edit');
        Route::put('/{id}',          [AdminLughOwlController::class, 'update'])->name('update');
        Route::delete('/{id}',       [AdminLughOwlController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/publie',  [AdminLughOwlController::class, 'togglePublie'])->name('publie');
        Route::post('/{id}/vedette', [AdminLughOwlController::class, 'toggleVedette'])->name('vedette');
        Route::post('/{id}/move',    [AdminLughOwlController::class, 'move'])->name('move');
    });

    // Zeus-Bug — CRUD articles
    Route::prefix('sites/zeus-bug')->name('zeus-bug.')->group(function () {
        Route::get('/',                      [AdminZeusBugController::class, 'index'])->name('index');
        Route::get('/create',                [AdminZeusBugController::class, 'create'])->name('create');
        Route::post('/',                     [AdminZeusBugController::class, 'store'])->name('store');
        Route::get('/{id}/edit',             [AdminZeusBugController::class, 'edit'])->name('edit');
        Route::put('/{id}',                  [AdminZeusBugController::class, 'update'])->name('update');
        Route::delete('/{id}',               [AdminZeusBugController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/publie',          [AdminZeusBugController::class, 'togglePublie'])->name('publie');
        Route::post('/{id}/move',            [AdminZeusBugController::class, 'move'])->name('move');
    });

    // Bragi Bird — CRUD morceaux
    Route::prefix('sites/bragi-bird')->name('bragi-bird.')->group(function () {
        Route::get('/',             [AdminBragiBirdController::class, 'index'])->name('index');
        Route::get('/create',       [AdminBragiBirdController::class, 'create'])->name('create');
        Route::post('/',            [AdminBragiBirdController::class, 'store'])->name('store');
        Route::get('/{id}/edit',    [AdminBragiBirdController::class, 'edit'])->name('edit');
        Route::put('/{id}',         [AdminBragiBirdController::class, 'update'])->name('update');
        Route::delete('/{id}',      [AdminBragiBirdController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/publie', [AdminBragiBirdController::class, 'togglePublie'])->name('publie');
        Route::post('/{id}/move',   [AdminBragiBirdController::class, 'move'])->name('move');
    });

    // Inari-Fox — CRUD recettes + référentiel
    Route::prefix('sites/inari-fox')->name('inari-fox.')->group(function () {
        Route::get('/', [AdminInariFoxController::class, 'index'])->name('index');

        // Recettes
        Route::get('/recettes/create',        [AdminInariFoxController::class, 'create'])->name('recette.create');
        Route::post('/recettes',              [AdminInariFoxController::class, 'store'])->name('recette.store');
        Route::get('/recettes/{id}/edit',     [AdminInariFoxController::class, 'edit'])->name('recette.edit');
        Route::put('/recettes/{id}',          [AdminInariFoxController::class, 'update'])->name('recette.update');
        Route::delete('/recettes/{id}',       [AdminInariFoxController::class, 'destroy'])->name('recette.destroy');
        Route::post('/recettes/{id}/publie',  [AdminInariFoxController::class, 'togglePublie'])->name('recette.publie');
        Route::post('/recettes/{id}/vedette', [AdminInariFoxController::class, 'toggleVedette'])->name('recette.vedette');

        // Référentiel — Ingrédients
        Route::get('/ingredients',            [AdminInariFoxController::class, 'ingredients'])->name('ingredients');
        Route::post('/ingredients',           [AdminInariFoxController::class, 'ingredientStore'])->name('ingredient.store');
        Route::put('/ingredients/{id}',       [AdminInariFoxController::class, 'ingredientUpdate'])->name('ingredient.update');
        Route::delete('/ingredients/{id}',    [AdminInariFoxController::class, 'ingredientDestroy'])->name('ingredient.destroy');

        // Référentiel — Catégories ingrédients
        Route::post('/categories',            [AdminInariFoxController::class, 'categorieStore'])->name('categorie.store');
        Route::put('/categories/{id}',        [AdminInariFoxController::class, 'categorieUpdate'])->name('categorie.update');

        // Référentiel — Unités
        Route::post('/unites',                [AdminInariFoxController::class, 'uniteStore'])->name('unite.store');
        Route::put('/unites/{id}',            [AdminInariFoxController::class, 'uniteUpdate'])->name('unite.update');

        // Référentiel — Régimes
        Route::post('/regimes',               [AdminInariFoxController::class, 'regimeStore'])->name('regime.store');
        Route::put('/regimes/{id}',           [AdminInariFoxController::class, 'regimeUpdate'])->name('regime.update');
    });

    // Autres sites (placeholder)
    Route::get('/sites/{site}', [AdminController::class, 'site'])->name('site');

    // Portfolio CRUD
    Route::prefix('portfolio')->name('portfolio.')->group(function () {

        // Présentation
        Route::get('/presentation',        [AdminPortfolioController::class, 'presentation'])->name('presentation');
        Route::post('/presentation',       [AdminPortfolioController::class, 'presentationSave'])->name('presentation.save');

        // Profil
        Route::get('/profil',              [AdminPortfolioController::class, 'profil'])->name('profil');
        Route::post('/profil',             [AdminPortfolioController::class, 'profilSave'])->name('profil.save');

        // Objectifs
        Route::get('/objectifs',           [AdminPortfolioController::class, 'objectifs'])->name('objectifs');
        Route::post('/objectifs/{id}',     [AdminPortfolioController::class, 'objectifSave'])->name('objectif.save');

        // Formations
        Route::get('/formations',          [AdminPortfolioController::class, 'formations'])->name('formations');
        Route::post('/formations',         [AdminPortfolioController::class, 'formationStore'])->name('formation.store');
        Route::get('/formations/{id}',     [AdminPortfolioController::class, 'formationEdit'])->name('formation.edit');
        Route::put('/formations/{id}',     [AdminPortfolioController::class, 'formationUpdate'])->name('formation.update');
        Route::delete('/formations/{id}',  [AdminPortfolioController::class, 'formationDestroy'])->name('formation.destroy');

        // Certifications
        Route::post('/certifications',        [AdminPortfolioController::class, 'certificationStore'])->name('certification.store');
        Route::put('/certifications/{id}',    [AdminPortfolioController::class, 'certificationUpdate'])->name('certification.update');
        Route::delete('/certifications/{id}', [AdminPortfolioController::class, 'certificationDestroy'])->name('certification.destroy');

        // Expériences
        Route::get('/experiences',         [AdminPortfolioController::class, 'experiences'])->name('experiences');
        Route::post('/experiences',        [AdminPortfolioController::class, 'experienceStore'])->name('experience.store');
        Route::get('/experiences/{id}',    [AdminPortfolioController::class, 'experienceEdit'])->name('experience.edit');
        Route::put('/experiences/{id}',    [AdminPortfolioController::class, 'experienceUpdate'])->name('experience.update');
        Route::delete('/experiences/{id}', [AdminPortfolioController::class, 'experienceDestroy'])->name('experience.destroy');

        // Compétences
        Route::get('/competences',         [AdminPortfolioController::class, 'competences'])->name('competences');
        Route::post('/competences',        [AdminPortfolioController::class, 'competencesSave'])->name('competences.save');

        // Projets
        Route::get('/sites',               [AdminPortfolioController::class, 'projets'])->name('sites');
        Route::post('/sites',              [AdminPortfolioController::class, 'projetStore'])->name('projet.store');
        Route::get('/sites/{id}',          [AdminPortfolioController::class, 'projetEdit'])->name('projet.edit');
        Route::put('/sites/{id}',          [AdminPortfolioController::class, 'projetUpdate'])->name('projet.update');
        Route::delete('/sites/{id}',       [AdminPortfolioController::class, 'projetDestroy'])->name('projet.destroy');

        // Paramètres globaux
        Route::get('/parametres',  [AdminPortfolioController::class, 'parametres'])->name('parametres');
        Route::post('/parametres', [AdminPortfolioController::class, 'parametresSave'])->name('parametres.save');
    });
});

require __DIR__.'/auth.php';
