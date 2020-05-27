<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');

            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('profs_id');



            $table->timestamps();

            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('matieres_id')->references('id')->on('matieres');
            $table->foreign('semestres_id')->references('id')->on('semestres');
            $table->foreign('profs_id')->references('id')->on('profs');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controles');
    }
}
