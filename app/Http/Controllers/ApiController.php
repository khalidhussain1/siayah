<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\FlightOneWayBooking;
use App\Models\FlightTwoWayBooking;
use App\Models\Airport;
use App\Models\covidtest;
use App\Models\riview;

class ApiController extends Controller
{
    //


    public function booking(Request $request){
        $data=new Booking();
        $data->user_id=1;
        $data->category=$request->category;
        $data->departure_date=$request->departure;
        $data->arrival_date=$request->arrival;
        $data->kids=$request->kids;
        $data->status=1;
        $data->adults=$request->adults;
        $data->rooms=$request->rooms;
   

        if($data->save()){
            return response()->json([
                'message'=>'Hotel Booking Created Successfully'
            ]);
        }else{
            return response()->json([
                'message'=>'Hotel Booking Not Created '
            ]);

        }
       
     
        }



        public function flight_one_way(Request $request){
            $data= new FlightOneWayBooking();
            $data->user_id=1;
            $data->from_city=$request->from_city;
            $data->to_city=$request->to_city;
            $data->departure_date=$request->departure;
            $data->kids=$request->kids;
            $data->adults=$request->adults;
            $data->seniors=$request->seniors;
            $data->status=1;
            if($data->save()){
                return response()->json([
                    'message'=>'Flight one way booking Created Successfully'
                ]);
            }
            else
            {
                return response()->json([
                    'message'=>'Flight one way booking Not Created '
                ]);
            }
            
         }


         public function flight_two_way(Request $request){
            $data= new FlightTwoWayBooking();
            $data->user_id=1;
            $data->from_city=$request->from_city;
            $data->to_city=$request->to_city;
            $data->departure_date=$request->departure;
            $data->arrival_date=$request->arrival;
            $data->kids=$request->kids;
            $data->adults=$request->adults;
            $data->seniors=$request->seniors;
            $data->status=1;
            if($data->save()){
                return response()->json([
                    'message'=>'Flight two way booking Created Successfully'
                ]);
            }
            else
            {
                return response()->json([
                    'message'=>'Flight two way booking Not Created '
                ]);
            }
            
         }


         public function airport(Request $request){
            $data= new Airport();
            $data->user_id=1;
            $data->departure=$request->departure;
            $data->arrival=$request->arrival;
            $data->departure_time=$request->departure_time;
            $data->arrival_time=$request->arrival_time;
            $data->driver=$request->driver;
           
            if($data->save()){
                return response()->json([
                    'message'=>'Data Created '
                ]);
            }
            else
            {
                return response()->json([
                    'message'=>'Error  '
                ]);
            }
            
         }



         public function covid_test(Request $request){
            $data= new covidtest();
            $data->user_id=1;
            $data->date=$request->date;
            $data->selectno=$request->selectno;
            $data->name=$request->name;
            $data->dob=$request->dob;
            $data->number=$request->number;
           
            if($data->save()){
                return response()->json([
                    'message'=>'Data Created '
                ]);
            }
            else
            {
                return response()->json([
                    'message'=>'Error  '
                ]);
            }
            
         }
         public function riviews(Request $request){
            $data= new riview();
            $data->user_id=1;
            $data->riview=$request->riview;
        
            if($data->save()){
                return response()->json([
                    'message'=>'Data Created '
                ]);
            }
            else
            {
                return response()->json([
                    'message'=>'Error  '
                ]);
            }
            
         }
         
}
