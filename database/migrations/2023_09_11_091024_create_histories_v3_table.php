<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesV3Table extends Migration
{
    public function up()
    {
        Schema::create('histories_v3', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Weitere Spalten für die Histories-Tabelle hier hinzufügen
        });
    }

    public function down()
    {
        Schema::dropIfExists('histories_v3');
    }
}
