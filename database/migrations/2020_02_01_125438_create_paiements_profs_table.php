<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements_profs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profs_id');
            $table->integer('nombre_heure');
            $table->integer('montant_par_heure');
            $table->date('date_paiements');
            $table->string('type_paiements');
            $table->integer('salaire');
            $table->integer('somme');
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
        Schema::dropIfExists('paiements_profs');
    }
}
