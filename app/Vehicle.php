<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [

    	'vehicle_no','dc_no','from_loc','to_loc','material','party_name',
        'rate','weight','gst','payment_type','diesel_rt','loading_quantity','accepted_quantity',
        'logistic_rent','lead','date','puc','scale','total_amount','expences','driver_name','profit','vehicle_provider',
        'service_loc','transport_type','vehicle_details','permit','permit_expiry_date'

    ];
}

