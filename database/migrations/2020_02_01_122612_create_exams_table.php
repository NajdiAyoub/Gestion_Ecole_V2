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
            $table->unsignedBigInteger('prof_id');
            $table->unsignedBigInteger('matiere_id');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('salle_id');


            $table->foreign('prof_id')->references('id')->on('profs');
            $table->foreign('matiere_id')->references('id')->on('matieres');
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('salle_id')->references('id')->on('salles');

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
