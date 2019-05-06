<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roads', function (Blueprint $table) {
            $table->increments('road_id');
            $table->string('way');
            $table->integer('length');
            $table->integer('waste');
            $table->integer('st_id')->unsigned();
            $table->integer('ed_id')->unsigned();
            $table->point('st_position');
            $table->point('ed_position');
            $table->string('st_name');
            $table->string('ed_name');

            $table->foreign('st_id')->references('spot_id')->on('spots');
            $table->foreign('ed_id')->references('spot_id')->on('spots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roads');
    }
}