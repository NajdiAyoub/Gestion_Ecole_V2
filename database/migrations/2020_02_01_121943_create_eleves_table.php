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
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('adresse')->default('moulay youssef marrakech ');
            $table->unsignedBigInteger('parents_id');
            $table->string('email');
            $table->unsignedBigInteger('niveaux_id');
            $table->unsignedBigInteger('filieres_id');
            $table->unsignedBigInteger('classes_id');
            $table->string('image');
            $table->string('login');
            $table->string('password');
            $table->foreign('parents_id')->references('id')->on('parents');
            $table->foreign('niveaux_id')->references('id')->on('niveaux');
            $table->foreign('filieres_id')->references('id')->on('filieres');
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
        Schema::dropIfExists('eleves');
    }
}
