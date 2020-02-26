<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule_eleves');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('adresse_eleves');
            $table->unsignedBigInteger('parents_id');
            $table->string('login');
            $table->string('password');
            $table->foreign('parents_id')->references('id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
