<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

    	'customer_type','sender_mobile','sender_origin','receiver_name','receiver_mobile','receiver_address',
        'items','total_weight','rate','date','total_amount'

    ];
}
