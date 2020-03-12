<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Administrations_id');
            $table->string('justificatif');
            $table->string('remarque');
            $table->date('date_conges');
            $table->unsignedBigInteger('attachements_id');
            $table->foreign('Administrations_id')->references('id')->on('Administrations');
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
        Schema::dropIfExists('conges');
    }
}
