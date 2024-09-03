<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Produk::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Direta',
            'no_tlp' => '085720676261',
            'alamat' => 'jagawaras-Sentral',
            'role' => 'customer',
            'foto' => '',
            'email' => 'direta@gmail.com',
            'password' => bcrypt('reta123')
        ]);

        User::create([
            'name' => 'Direta Ramandha P',
            'no_tlp' => '085720676261',
            'alamat' => 'jagawaras-Sentral',
            'role' => 'seller',
            'foto' => '',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('reta123')
        ]);

    }
}
