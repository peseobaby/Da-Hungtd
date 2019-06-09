<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDateOrdersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dateTime('create_at')->nullable()->change();
            $table->dateTime('end_at')->nullable()->change();
            $table->unsignedInteger('user_id')->nullable()->change();
            $table->unsignedInteger('phone')->nullable()->change();
            $table->unsignedInteger('hotel_id')->nullable()->change();
            $table->unsignedInteger('room_id')->nullable()->change();
            $table->integer('price')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->date('create_at')->nullable()->change();
            $table->date('end_at')->nullable()->change();
            $table->unsignedInteger('user_id')->change();
            $table->unsignedInteger('phone')->change();
            $table->unsignedInteger('hotel_id')->change();
            $table->unsignedInteger('room_id')->change();
            $table->integer('price')->nullable()->change();
        });
    }
}
