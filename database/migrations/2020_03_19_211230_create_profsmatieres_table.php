<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfsmatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profsmatieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profs_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('niveaux_id');
            $table->unsignedBigInteger('semestres_id');



            $table->timestamps();

            $table->foreign('profs_id')->references('id')->on('profs');
            $table->foreign('matieres_id')->references('id')->on('matieres');
            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('niveaux_id')->references('id')->on('niveaux');
            $table->foreign('semestres_id')->references('id')->on('semestres');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profsmatieres');
    }
}
