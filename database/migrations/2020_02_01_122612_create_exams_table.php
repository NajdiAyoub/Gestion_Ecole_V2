<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->date('date_exam');
            $table->string('heure_exam');
            $table->unsignedBigInteger('profs_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('anneesscolaire_id');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('salles_id');


            $table->foreign('profs_id')->references('id')->on('profs');
            $table->foreign('matieres_id')->references('id')->on('matieres');
            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('salles_id')->references('id')->on('salles');
            $table->foreign('anneesscolaire_id')->references('id')->on('anneesscolaire');
            $table->foreign('semestres_id')->references('id')->on('semestres');


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
        Schema::dropIfExists('exams');
    }
}
