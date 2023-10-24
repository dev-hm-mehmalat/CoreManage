<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projekrusta', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Beispiel für eine Spalte 'name'
            $table->text('beschreibung'); // Beispiel für eine Spalte 'beschreibung'
            $table->date('startdatum'); // Beispiel für eine Spalte 'startdatum'
            $table->date('enddatum'); // Beispiel für eine Spalte 'enddatum'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projekrusta');
    }
};

