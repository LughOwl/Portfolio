<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class IfRecette extends Model
{
    protected $table = 'if_recettes';

    protected $fillable = [
        'slug', 'titre_fr', 'titre_en', 'description_fr', 'description_en',
        'categorie', 'difficulte', 'temps_preparation', 'temps_cuisson',
        'temps_repos', 'nb_personnes', 'photo', 'est_publiee', 'est_vedette',
    ];

    protected $casts = [
        'est_publiee' => 'boolean',
        'est_vedette' => 'boolean',
    ];

    // ── Relations ────────────────────────────────────────────

    public function ingredients(): HasMany
    {
        return $this->hasMany(IfRecetteIngredient::class, 'recette_id')->orderBy('position');
    }

    public function etapes(): HasMany
    {
        return $this->hasMany(IfEtape::class, 'recette_id')->orderBy('position');
    }

    public function astuces(): HasMany
    {
        return $this->hasMany(IfAstuce::class, 'recette_id')->orderBy('position');
    }

    public function regimes(): BelongsToMany
    {
        return $this->belongsToMany(IfRegime::class, 'if_recette_regime', 'recette_id', 'regime_id');
    }

    // ── Accesseurs ───────────────────────────────────────────

    public function titre(string $locale = 'fr'): string
    {
        return $locale === 'en' ? $this->titre_en : $this->titre_fr;
    }

    public function description(string $locale = 'fr'): ?string
    {
        return $locale === 'en' ? $this->description_en : $this->description_fr;
    }

    public function tempsTotal(): int
    {
        return $this->temps_preparation + $this->temps_cuisson + $this->temps_repos;
    }

    public function tempsTotalFormate(string $locale = 'fr'): string
    {
        $total = $this->tempsTotal();
        if ($total < 60) {
            return $locale === 'en' ? "{$total} min" : "{$total} min";
        }
        $h = intdiv($total, 60);
        $m = $total % 60;
        if ($locale === 'en') {
            return $m > 0 ? "{$h}h {$m}min" : "{$h}h";
        }
        return $m > 0 ? "{$h}h {$m}min" : "{$h}h";
    }

    public function categorieLabel(string $locale = 'fr'): string
    {
        $labels = [
            'fr' => [
                'entree'         => 'Entrée',
                'plat_principal' => 'Plat principal',
                'dessert'        => 'Dessert',
                'accompagnement' => 'Accompagnement',
                'petit_dejeuner' => 'Petit-déjeuner',
                'encas_gouter'   => 'Encas / Goûter',
                'aperitif'       => 'Apéritif',
                'boisson'        => 'Boisson',
            ],
            'en' => [
                'entree'         => 'Starter',
                'plat_principal' => 'Main course',
                'dessert'        => 'Dessert',
                'accompagnement' => 'Side dish',
                'petit_dejeuner' => 'Breakfast',
                'encas_gouter'   => 'Snack',
                'aperitif'       => 'Appetizer',
                'boisson'        => 'Beverage',
            ],
        ];

        return $labels[$locale][$this->categorie] ?? $this->categorie;
    }

    public function difficulteLabel(string $locale = 'fr'): string
    {
        $labels = [
            'fr' => ['facile' => 'Facile', 'moyen' => 'Moyen', 'difficile' => 'Difficile'],
            'en' => ['facile' => 'Easy',   'moyen' => 'Medium', 'difficile' => 'Hard'],
        ];

        return $labels[$locale][$this->difficulte] ?? $this->difficulte;
    }

    public function photoUrl(): ?string
    {
        if (! $this->photo) return null;
        return asset('storage/' . $this->photo);
    }

    // ── Slug auto-génération ─────────────────────────────────

    public static function generateSlug(string $titre): string
    {
        $slug = Str::slug($titre);
        $original = $slug;
        $i = 2;

        while (static::where('slug', $slug)->exists()) {
            $slug = "{$original}-{$i}";
            $i++;
        }

        return $slug;
    }
}
