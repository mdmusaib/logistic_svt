<?php

namespace App\Http\Controllers;
use App\CustomerDetails;
use Illuminate\Http\Request;

class CustomerDetailController extends Controller
{
    public function create(Request $request){
        $input=$request->data;
        $createCustomers=CustomerDetails::create(
            (array) $input);
            return $createCustomers;
    }
    public function index(Request $request){
        $getAll=CustomerDetails::all();
            return $getAll;
    }
}
