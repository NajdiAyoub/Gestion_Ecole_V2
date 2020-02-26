<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eleves_id');
            $table->unsignedBigInteger('niveaux_id');
            $table->unsignedBigInteger('semestres_id');
            $table->unsignedBigInteger('attachements_id');
            $table->string('annee_scolaire');
            $table->foreign('eleves_id')->references('id')->on('eleves');
            $table->foreign('niveaux_id')->references('id')->on('niveaux');
            $table->foreign('semestres_id')->references('id')->on('semestres');
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
        Schema::dropIfExists('bulletins');
    }
}
