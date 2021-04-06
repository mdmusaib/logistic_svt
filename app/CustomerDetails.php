<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    protected $fillable = ['name','email','mobile','pan_no','aadhar_no','address'];
}
