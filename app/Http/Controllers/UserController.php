<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\FlightOneWayBooking;
// use App\Http\Controllers\UserController;

class UserController extends Controller
{
 
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }


      public function booking(Request $request){

    return response()->json([
            'message'=>'created Successfully'
        ]);
        // dd($request);
        // $data=new Booking();
        // $data->user_id=Auth()->user()->id;
        // $data->category=$request->category;
        // $data->departure_date=$request->departure;
        // $data->arrival_date=$request->arrival;
        // $data->kids=$request->kids;
        // $data->status=1;
        // $data->adults=$request->adults;
        // $data->rooms=$request->rooms;
        // if($data->save())
        // {
        //     return "saved";
        // }
        // else
        // {
        //     return "error";
        // }
   
        // return ["data"=>"data has been saved "];
   
return "yes";
     
      }

      public function flight_one_way(Request $request){
         $data= new FlightOneWayBooking();
         $data->user_id=Auth()->user()->id;
         $data->from_city=$request->from_city;
         $data->to_city=$request->to_city;
         $data->departure_date=$request->departure;
         $data->kids=$request->kids;
         $data->adults=$request->adults;
         $data->seniors=$request->seniors;
         $data->status=1;
         if($data->save()){
             return "saved ";
         }
         else
         {
             return "not saved ";
         }
         
      }


      public function flight_two_way(Request $request){
        $data= new FlightOneWayBooking();
        $data->user_id=Auth()->user()->id;
        $data->from_city=$request->from_city;
        $data->to_city=$request->to_city;
        $data->departure_date=$request->departure;
        $data->departure_date=$request->departure;
        $data->kids=$request->kids;
        $data->adults=$request->adults;
        $data->seniors=$request->seniors;
        $data->status=1;
        if($data->save()){
            return "saved ";
        }
        else
        {
            return "not saved ";
        }
        
     }

     public function test(){
        // return response()->json([
        //     'message'=>'created Successfully'
        // ]);
        return "test";
     }

}
