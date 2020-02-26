<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements_eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eleves_id');
            $table->unsignedBigInteger('parents_id');
            $table->date('date_paiements');
            $table->string('type_paiements');
            $table->integer('somme_paiements');
            $table->foreign('eleves_id')->references('id')->on('eleves');
            $table->foreign('parents_id')->references('id')->on('parents');



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
        Schema::dropIfExists('paiements_eleves');
    }
}
