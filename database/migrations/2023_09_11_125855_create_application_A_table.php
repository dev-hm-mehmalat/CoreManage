<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('a', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docker_container_id'); // Referenz zur docker_containers Tabelle
            $table->string('application_name'); // Name der Anwendung
            $table->string('version'); // Installierte Version der Anwendung
            $table->date('last_checked_date'); // Datum der letzten Überprüfung
            $table->timestamps();

            // Fremdschlüsselbeziehung
            $table->foreign('docker_container_id')->references('id')->on('docker_containers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('A');
    }
};
