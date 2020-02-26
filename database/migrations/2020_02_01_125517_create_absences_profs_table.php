<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_profs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profs_id');
            $table->string('justificatif');
            $table->string('remarque');
            $table->date('date_absences');
            $table->unsignedBigInteger('attachements_id');
            $table->foreign('profs_id')->references('id')->on('profs');
            $table->foreign('attachements_id')->references('id')->on('attachements');


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
        Schema::dropIfExists('absences_profs');
    }
}
