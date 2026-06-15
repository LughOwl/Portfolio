<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'nicola.bisaga@gmail.com'],
            [
                'name'              => 'Nicolas BISAGA',
                'email'             => 'nicola.bisaga@gmail.com',
                'password'          => Hash::make('Nicolas51297/*-'),
                'email_verified_at' => now(),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]
        );

        $this->command->info('Admin créé : nicola.bisaga@gmail.com');
    }
}
