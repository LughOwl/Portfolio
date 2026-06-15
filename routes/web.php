<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminJanusBeeController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\ContactController;
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

    foreach (['presentation','profil','recherches','formations','experiences','competences','sites','contact','plan','legal'] as $page) {
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
        Route::get('/modeles',   [LughOwlController::class, 'modeles'])->name('modeles');
        Route::get('/idees',     [LughOwlController::class, 'idees'])->name('idees');
        Route::get('/vie',       [LughOwlController::class, 'vie'])->name('vie');
        Route::get('/recherche', [LughOwlController::class, 'recherche'])->name('recherche');
        Route::get('/origines',  [LughOwlController::class, 'origines'])->name('origines');
        Route::get('/plan',      [LughOwlController::class, 'plan'])->name('plan');
        Route::get('/legal',     [LughOwlController::class, 'legal'])->name('legal');
        Route::get('/{slug}',    [LughOwlController::class, 'article'])->name('article');
    });

    // Sites en construction
    foreach (['inari-fox','bragi-bird','gaia-deer','zeus-bug','ouranos-taurus'] as $project) {
        Route::get("/{$project}", [PortfolioController::class, 'construction'])
            ->defaults('project', $project)
            ->name($project);
    }

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

    foreach (['presentation','training','experiences','skills','websites','contact','sitemap','termsofuse'] as $page) {
        Route::get("/{$page}", [PortfolioController::class, 'en'])
            ->defaults('page', $page)
            ->name($page);
    }

    Route::post('/contact', [ContactController::class, 'sendEn'])->name('contact.send');

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
        Route::post('/types',        [AdminJanusBeeController::class, 'typeStore'])->name('type.store');
        Route::delete('/types/{id}', [AdminJanusBeeController::class, 'typeDestroy'])->name('type.destroy');
        Route::post('/genres',       [AdminJanusBeeController::class, 'genreStore'])->name('genre.store');
        Route::delete('/genres/{id}',[AdminJanusBeeController::class, 'genreDestroy'])->name('genre.destroy');
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
    });
});

require __DIR__.'/auth.php';
