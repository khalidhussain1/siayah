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
            $table->text('username')->nullable();
            $table->text('national_id')->nullable();
            $table->text('dob')->nullable();
            $table->text('no_of_doses')->nullable();
            $table->text('covid_certificate_id')->nullable();
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
