<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesniveauxfilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classesniveauxfilieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('profs_id');
            $table->unsignedBigInteger('niveaux_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('filieres_id');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('anneesscolaire_id');

            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('profs_id')->references('id')->on('profs');
            $table->foreign('niveaux_id')->references('id')->on('niveaux');
            $table->foreign('matieres_id')->references('id')->on('matieres');
            $table->foreign('filieres_id')->references('id')->on('filieres');
            $table->foreign('semestres_id')->references('id')->on('semestres');
            $table->foreign('anneesscolaire_id')->references('id')->on('anneesscolaire');




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
        Schema::dropIfExists('classesniveauxfilieres');
    }
}
