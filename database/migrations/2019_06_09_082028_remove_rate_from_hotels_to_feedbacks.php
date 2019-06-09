<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveRateFromHotelsToFeedbacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->string('rate')->nullable();
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels_to_feedbacks', function (Blueprint $table) {
            //
        });
    }
}
