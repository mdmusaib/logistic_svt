<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Vehicle;
use App\Http\Resources\Booking as BookingResource;

class BookingController extends Controller
{
    public function index()
    {
        $bookings=Booking::all();
        return BookingResource::collection($bookings);
    }
    public function create(Request $request)
    {
        $input=$request["data"];
        
        $vehicle_data=$input['vehicle_details'];
        // $isVehicleExists=Vehicle::where('vehicle_no', $vehicles->vehicle_no)->first();
        
            foreach ($vehicle_data as $vehicles) {
                return $vehicles;
                // return $request->file('images');
                $newVehicle=new Vehicle();
                $newVehicle->fill([
                    "vehicle_no"=>$vehicles->vehicle_no,
                    "from_loc"=>$vehicles->from_loc,
                    "to_loc"=>$vehicles->to_loc,
                    'dc_no'=>$vehicles->dc_no,
                    "material"=>$vehicles->material,
                    "party_name"=>$vehicles->party_name,
                    "rate"=>$vehicles->rate,
                    "weight"=>$vehicles->weight,
                    'gst'=>$vehicles->gst,
                    'payment_type'=>$vehicles->payment_type,
                    'diesel_rt'=>$vehicles->diesel_rt,
                    'loading_quantity'=>$vehicles->loading_quantity,
                    'accepted_quantity'=>$vehicles->accepted_quantity,
                    'logistic_rent'=>$vehicles->logistic_rent,
                    'lead'=>$vehicles->lead,
                    'date'=>$vehicles->date,
                    'puc'=>$vehicles->puc,
                    "scale"=>$vehicles->scale,
                    "total_amount"=>$vehicles->total_amount,
                    "expences"=>$vehicles->expences,
                    "driver_name"=>$vehicles->driver_name,
                    "profit"=>$vehicles->profit
                ]);
                $newVehicle->save();
            }
            return response()->json(['status'=>1,'response' => $newVehicle]);
        

    }
    public function show(Request $request, $id)
    {
        $vehicleShow=Vehicle::find($id);

        if (is_null($id)) {
            return response()->json(['status'=>1,'response' => '404!No Information Found In Our Record!']);
        }



        return new BookingResource($vehicleShow);
    }
    public function update(Request $request, $id)
    {
        $updateBooking=Booking::findorfail($id);
        $updateBooking->update($request->all());
        return new BookingResource($updateBooking);
    }
}
