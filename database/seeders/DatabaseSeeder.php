<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'user',
            'nama' => 'User',
            'alamat' => 'Alamat',
            'no_telp' => '081234567890',
            'no_sim' => '1111-1111-000001',
        ]);
    }
}
