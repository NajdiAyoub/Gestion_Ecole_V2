<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportGroupeZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_groupe_zone', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('group_tansport_id');
            $table->unsignedBigInteger('zone_id');
            $table->foreign('group_tansport_id')->references('id')->on('groupes_transports');
            $table->foreign('zone_id')->references('id')->on('zones');


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
        Schema::dropIfExists('transport_groupe_zone');
    }
}
