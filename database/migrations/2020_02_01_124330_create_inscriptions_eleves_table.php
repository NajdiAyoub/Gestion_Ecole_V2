<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('niveaux_id');

            $table->unsignedBigInteger('classes_id');
            $table->date('date_inscriptions');
            $table->integer('frais_inscriptions');
            $table->foreign('niveaux_id')->references('id')->on('niveaux');
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
        Schema::dropIfExists('inscriptions_eleves');
    }
}
