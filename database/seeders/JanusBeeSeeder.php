<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Oeuvre;
use App\Models\Type;
use Illuminate\Database\Seeder;

class JanusBeeSeeder extends Seeder
{
    public function run(): void
    {
        include base_path('../portfolio-laravel/fr/include/Janus-Bee/data.php');

        foreach ($Types as $nom) {
            Type::firstOrCreate(['nom' => $nom]);
        }

        foreach ($Genres as $nom) {
            Genre::firstOrCreate(['nom' => $nom]);
        }

        foreach ($Oeuvres as $data) {
            $oeuvre = Oeuvre::create([
                'titre'              => $data['titre'],
                'titres_alternatifs' => $data['titres_alternatifs'] ?? null,
                'image'              => $data['image'] ?? null,
                'sortie'             => $data['sortie'] ?? null,
                'status'             => $data['status'] ?? null,
                'duree'              => $data['duree'] ?? null,
                'synopsis'           => $data['synopsis'] ?? null,
                'video'              => $data['video'] ?? null,
            ]);

            if (!empty($data['types'])) {
                $typeIds = Type::whereIn('nom', $data['types'])->pluck('id');
                $oeuvre->types()->attach($typeIds);
            }

            if (!empty($data['genres'])) {
                $genreIds = Genre::whereIn('nom', $data['genres'])->pluck('id');
                $oeuvre->genres()->attach($genreIds);
            }
        }
    }
}
