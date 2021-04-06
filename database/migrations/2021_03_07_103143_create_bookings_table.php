<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_type');
            $table->string('sender_email')->nullable();
            $table->string('sender_mobile');
            $table->string('sender_origin');
            $table->string('sender_origin_loc')->nullable();
            $table->string('receiver_name');
            $table->string('receiver_email')->nullable();
            $table->string('receiver_mobile');
            $table->string('receiver_address');
            $table->text('commodity');
            $table->integer('weight');
            $table->integer('total_weight');
            $table->integer('rate');
            $table->integer('date');
            $table->integer('delivery_date')->nullable();
            $table->integer('tax');
            $table->integer('total_amount');
            $table->dateTime('created_by')->nullable();
            $table->dateTime('updated_by')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
