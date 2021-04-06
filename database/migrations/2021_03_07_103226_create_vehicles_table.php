<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_no');
            $table->string('dc_no')->nullable();
            $table->string('from_loc')->nullable();
            $table->string('to_loc')->nullable();
            $table->string('material')->nullable();
            $table->string('party_name');
            $table->string('rate')->nullable();
            $table->string('weight')->nullable();
            $table->string('gst')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('diesel_rt')->nullable();
            $table->string('diesel_qty')->nullable();
            $table->string('loading_quantity')->nullable();
            $table->string('accepted_quantity')->nullable();
            $table->string('logistic_rent')->nullable();
            $table->string('lead')->nullable();
            $table->string('date')->nullable();
            $table->string('puc')->nullable();
            $table->string('scale')->nullable();
            $table->string('expences')->nullable();
            $table->text('driver_name')->nullable();
            $table->integer('profit')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('vehicle_provider')->nullable();
            $table->string('service_loc')->nullable();
            $table->string('transport_type')->nullable();
            $table->string('vehicle_details')->nullable();
            $table->string('permit')->nullable();
            $table->string('permit_expiry_date')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
