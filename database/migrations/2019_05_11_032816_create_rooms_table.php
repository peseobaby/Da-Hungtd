<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *ad
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('room_types');
            $table->unsignedTinyInteger('capacity')->nullable();
            $table->unsignedTinyInteger('num_bed_room')->nullable();
            $table->float('area')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedTinyInteger('active')->default('1')->comment('1: con, 0: het phong');
            $table->unsignedInteger('convenience_id')->nullable();
            $table->foreign('convenience_id')->references('id')->on('room_has_conveniences');
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
        Schema::dropIfExists('rooms');
    }
}
