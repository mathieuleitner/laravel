<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seances', function (Blueprint $table) {
            $table->unsignedInteger('film_id');
            $table->foreign('film_id')->references('id')->on('films');
            
            $table->unsignedInteger('cinema_id');
            $table->foreign('cinema_id')->references('id')->on('cinemas');

            $table->unsignedInteger('salles_id');
            $table->foreign('salles_id')->references('id')->on('salles');            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seances', function (Blueprint $table) {
            //
        });
    }
}
