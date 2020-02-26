<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eleves_id');
            $table->string('remaraque');
            $table->date('date_absences');
            $table->unsignedBigInteger('attachements_id');
            $table->foreign('eleves_id')->references('id')->on('eleves');
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
        Schema::dropIfExists('absences_eleves');
    }
}
