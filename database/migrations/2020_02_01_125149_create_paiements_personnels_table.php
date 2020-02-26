<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements_personnels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personnels_id');
            $table->date('date_paiements');
            $table->string('type_paiements');
            $table->integer('salaire');
            $table->foreign('personnels_id')->references('id')->on('personnels');





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
        Schema::dropIfExists('paiements_personnels');
    }
}
