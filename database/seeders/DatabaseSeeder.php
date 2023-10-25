<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Rufen Sie die run-Methode des NeuerSeederName-Seeds auf
        $this->call(NeuerSeederName::class);

        // Weitere Seeder-Klassen hier aufrufen, falls erforderlich
// \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



    }
}
