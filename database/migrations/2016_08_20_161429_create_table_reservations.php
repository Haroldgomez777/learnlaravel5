<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function ($table) {
            $table->increments('id');
            $table->string('room');
            $table->float('total_price');
            $table->integer('occupancy');
            $table->integer('customer_id');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('room_type_id');
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
        Schema::drop('reservations');
    }
}
