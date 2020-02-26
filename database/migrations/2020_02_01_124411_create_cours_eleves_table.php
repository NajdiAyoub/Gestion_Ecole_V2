<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->date('date_attach');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('profs_id');
            $table->foreign('semestres_id')->references('id')->on('semestres');
            $table->foreign('matieres_id')->references('id')->on('matieres');

         
            $table->foreign('profs_id')->references('id')->on('profs');


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
        Schema::dropIfExists('cours_eleves');
    }
}
