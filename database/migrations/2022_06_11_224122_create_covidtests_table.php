<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidtests', function (Blueprint $table) {
            $table->id();
            $table->text('user_id')->nullable();
            $table->text('date')->nullable();
            $table->text('selectno')->nullable();
            $table->text('name')->nullable();
            $table->text('dob')->nullable();
            $table->text('number')->nullable();
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
        Schema::dropIfExists('covidtests');
    }
}
