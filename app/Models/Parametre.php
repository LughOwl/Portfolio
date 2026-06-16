<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Parametre extends Model
{
    protected $primaryKey = 'cle';
    protected $keyType    = 'string';
    public    $incrementing = false;
    protected $fillable   = ['cle', 'valeur'];

    private static array $defaults = [
        'github_url'        => 'https://github.com/lughowl',
        'linkedin_url'      => 'https://www.linkedin.com/in/nicolasbisaga',
        'tryhackme_url'     => 'https://tryhackme.com/p/NewGateFR',
        'contact_ouvert'    => '1',
        'contact_statut_fr' => 'Actuellement disponible pour des opportunités en alternance et stage en cybersécurité (SOC Analyst, audit, pentest). N\'hésitez pas à me contacter.',
        'contact_statut_en' => 'Currently available for internship and work-study opportunities in cybersecurity (SOC Analyst, audit, pentest). Feel free to reach out.',
    ];

    public static function get(string $cle): string
    {
        return Cache::remember("parametre_{$cle}", 3600, function () use ($cle) {
            return static::find($cle)?->valeur ?? static::$defaults[$cle] ?? '';
        });
    }

    public static function all_settings(): array
    {
        $rows = static::all()->pluck('valeur', 'cle')->toArray();
        return array_merge(static::$defaults, $rows);
    }

    public static function set(string $cle, string $valeur): void
    {
        static::updateOrCreate(['cle' => $cle], ['valeur' => $valeur]);
        Cache::forget("parametre_{$cle}");
    }
}
