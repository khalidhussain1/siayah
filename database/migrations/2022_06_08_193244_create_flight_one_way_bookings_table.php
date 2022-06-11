<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightOneWayBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_one_way_bookings', function (Blueprint $table) {
            $table->id();
            $table->text('user_id')->nullable();
            $table->text('from_city')->nullable();
            $table->text('to_city')->nullable();
            $table->text('departure_date')->nullable();
            $table->text('kids')->nullable();
            $table->text('adults')->nullable();
            $table->text('seniors')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('flight_one_way_bookings');
    }
}
