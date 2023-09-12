<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDockerContainersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('docker_containers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('port');
            $table->timestamps(); // Erstellt "created_at" und "updated_at"
            // Andere Spalten hinzufügen, die Sie benötigen
            // Zum Beispiel:
            // $table->string('name');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('docker_containers');
    }
}



