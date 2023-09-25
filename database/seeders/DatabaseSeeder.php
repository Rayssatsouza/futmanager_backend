<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'futmanager',
        //     'email' => 'futmanager@example.com',
        //     'password' => '12345'
        // ]);

        Perfil::factory()->create([
            'nm_perfil' => 'administrador',
            'sn_ativo' => true,
            'user_id'=> 1
        ]);
    }
}
