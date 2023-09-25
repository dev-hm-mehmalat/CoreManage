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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            // Gemeinsame Spalten
            $table->timestamps();

            // Spalten von application_A
            $table->unsignedBigInteger('docker_container_id')->nullable();
            $table->string('application_name')->nullable();
            $table->integer('server_id');
            $table->integer('container_id');
            $table->date('last_checked_date')->nullable();

            // Spalten von application_B
            $table->string('name')->nullable();
            $table->string('version')->nullable();
            $table->date('installation_date')->nullable();
            $table->string('path')->nullable();

            // Fremdschlüsselbeziehung
            $table->foreign('docker_container_id')->references('id')->on('docker_containers')->onDelete('cascade');

            // Weitere Spalten für application_C (falls benötigt) hier hinzufügen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
