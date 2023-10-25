<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataColumnToProjekrusta extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasColumn('projekrusta', 'data')) {
            Schema::table('projekrusta', function (Blueprint $table) {
                $table->string('data', 255);
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('projekrusta', function (Blueprint $table) {
            $table->dropColumn('data');
        });
    }
}
