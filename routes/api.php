<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')
->get('/user', function(Request $request) {    
return $request->user();
});

Route::post('login','UserController@login');

Route::get('customers','CustomerDetailController@index');
Route::post('customers/create','CustomerDetailController@create');
Route::get('getBookings','BookingController@index');
Route::post('addBooking','BookingController@create');
Route::get('getBooking/{id}','BookingController@show');
Route::post('updateBooking/{id}','BookingController@update');
// Route::delete('address/{id}','AddressController@delete');

Route::get('getVehicleBooking','VehicleController@index');
Route::post('updateVehicle','VehicleController@update');
Route::post('uploadFile','VehicleController@uploadFile');

Route::get('getImages','VehicleController@getImages');
Route::get('getCustomerDetails','CustomerDetailController@getCustomerDetails');


// return Redirect::to($url);

