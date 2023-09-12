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
        Schema::create('B', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // z.B. 'TYPO3' oder 'Wordpress'
            $table->string('version');
            $table->date('installation_date');
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('B');
    }
};
