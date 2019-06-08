<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->integer('provide_id')->nullable();
            $table->foreign('provide_id')
                ->references('id')
                ->on($tableNames['provides'])
                ->onDelete('cascade');
            $table->integer('city_id')->nullable();
            $table->foreign('city_id')
                ->references('id')
                ->on($tableNames['cities'])
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
        });
    }
}
