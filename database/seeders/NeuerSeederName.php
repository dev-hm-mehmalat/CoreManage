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
        DB::table('projekrusta')->insert([
            'data' => 'Ihre Daten',
            'name' => 'Standardwert',
            'beschreibung' => 'Dies ist eine Testbeschreibung' // Pflichtfeld hinzugefügt!
        ]);
    }
}