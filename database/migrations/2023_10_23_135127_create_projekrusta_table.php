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
            $table->string('data');
            $table->string('name');
            $table->string('beschreibung');
            $table->date('startdatum')->default('2023-10-24'); // Standardwert für das Startdatum
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projekrusta');
    }
};

