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
            $table->string('nom_exams');
            $table->date('date_exams');
            $table->string('heures_exams');
            $table->string('annee_scolaire');
            $table->unsignedBigInteger('profs_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('salles_id');


            $table->foreign('profs_id')->references('id')->on('profs');
            $table->foreign('matieres_id')->references('id')->on('matieres');
            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('salles_id')->references('id')->on('salles');





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
