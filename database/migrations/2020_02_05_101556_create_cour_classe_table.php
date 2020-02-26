<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourClasseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cour_classe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cour_id');
            $table->unsignedBigInteger('classe_id');

            $table->timestamps();

            $table->foreign('cour_id')->references('id')->on('cours_eleves');
            $table->foreign('classe_id')->references('id')->on('classes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cour_classe');
    }
}
