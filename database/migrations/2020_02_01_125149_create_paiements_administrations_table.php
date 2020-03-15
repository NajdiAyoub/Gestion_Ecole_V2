<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements_Administrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Administrations_id');
            $table->date('date_paiements');
            $table->string('type_paiements');
            $table->integer('salaire');
            $table->foreign('Administrations_id')->references('id')->on('Administrations');





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
        Schema::dropIfExists('paiements_Administrations');
    }
}
