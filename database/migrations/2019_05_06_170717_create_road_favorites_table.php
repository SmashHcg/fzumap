<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_favorites', function (Blueprint $table) {
            $table->integer('f_user_id')->unsigned();
            $table->integer('f_road_id')->unsigned();


            $table->foreign('f_user_id')->references('id')->on('users');
            $table->foreign('f_road_id')->references('road_id')->on('roads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('road_favorites');
    }
}