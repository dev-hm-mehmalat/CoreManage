<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeuerSeederName extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fügen Sie hier Ihre Daten in die Datenbank ein
        DB::table('projekrusta')->insert([
            'data' => 'Ihre Daten',
            'name' => 'Standardwert'
        ]);

        // Weitere Daten hier einfügen
    }
}
