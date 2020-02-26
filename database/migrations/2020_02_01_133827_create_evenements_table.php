<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle_evenements');
            $table->string('type_evenememts');
            $table->unsignedBigInteger('personnels_id');
            $table->date('date_evenements');
            $table->unsignedBigInteger('attachements_id');
            $table->string('description_evenements');
            $table->foreign('attachements_id')->references('id')->on('attachements');
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
        Schema::dropIfExists('evenements');
    }
}
