<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisDuTempsElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois_du_temps_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('classes_id');
            $table->string('annee_scolaire');
            $table->foreign('semestres_id')->references('id')->on('semestres');
            $table->foreign('classes_id')->references('id')->on('classes');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emplois_du_temps_eleves');
    }
}
