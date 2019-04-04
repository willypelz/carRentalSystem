<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_owner_name');
            $table->string('plate_number');
            $table->string('color');
            $table->string('side_window_no');
            $table->string('chassis_no');
            $table->string('make_of_vehicle');
            $table->string('model');
            $table->string('dealer_name');
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
        Schema::dropIfExists('cars');
    }
}
