<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Hotel;
use App\Models\FlightOneWayBooking;
use App\Models\FlightTwoWayBooking;
use App\Models\Airport;
use App\Models\covidtest;
use App\Models\riview;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use illuminate\support\facades\Auth;
use lluminate\support\facades\validator;


class ApiController extends Controller
{
    //


    public function booking(Request $request)
    {
        $data = new Booking();
        $data->user_id = 1;
        $data->category = $request->category;
        $data->departure_date = $request->departure;
        $data->arrival_date = $request->arrival;
        $data->kids = $request->kids;
        $data->status = 1;
        $data->adults = $request->adults;
        $data->rooms = $request->rooms;


        if ($data->save()) {
            return response()->json([
                'message' => 'Hotel Booking Created Successfully'
            ]);
        } else {
            return response()->json([
                'message' => 'Hotel Booking Not Created '
            ]);
        }
    }



    public function flight_one_way(Request $request)
    {
        $data = new FlightOneWayBooking();
        $data->user_id = 1;
        $data->from_city = $request->from_city;
        $data->to_city = $request->to_city;
        $data->departure_date = $request->departure;
        $data->kids = $request->kids;
        $data->adults = $request->adults;
        $data->seniors = $request->seniors;
        $data->status = 1;
        if ($data->save()) {
            return response()->json([
                'message' => 'Flight one way booking Created Successfully'
            ]);
        } else {
            return response()->json([
                'message' => 'Flight one way booking Not Created '
            ]);
        }
    }


    public function flight_two_way(Request $request)
    {
        $data = new FlightTwoWayBooking();
        $data->user_id = 1;
        $data->from_city = $request->from_city;
        $data->to_city = $request->to_city;
        $data->departure_date = $request->departure;
        $data->arrival_date = $request->arrival;
        $data->kids = $request->kids;
        $data->adults = $request->adults;
        $data->seniors = $request->seniors;
        $data->status = 1;
        if ($data->save()) {
            return response()->json([
                'message' => 'Flight two way booking Created Successfully'
            ]);
        } else {
            return response()->json([
                'message' => 'Flight two way booking Not Created '
            ]);
        }
    }


    public function airport(Request $request)
    {
        $data = new Airport();
        $data->user_id = 1;
        $data->departure = $request->departure;
        $data->arrival = $request->arrival;
        $data->departure_time = $request->departure_time;
        $data->arrival_time = $request->arrival_time;
        $data->driver = $request->driver;

        if ($data->save()) {
            return response()->json([
                'message' => 'Data Created '
            ]);
        } else {
            return response()->json([
                'message' => 'Error  '
            ]);
        }
    }



    public function covid_test(Request $request)
    {
        $data = new covidtest();
        $data->user_id = 1;
        $data->date = $request->date;
        $data->selectno = $request->selectno;
        $data->name = $request->name;
        $data->dob = $request->dob;
        $data->number = $request->number;

        if ($data->save()) {
            return response()->json([
                'message' => 'Data Created '
            ]);
        } else {
            return response()->json([
                'message' => 'Error  '
            ]);
        }
    }
    public function riviews(Request $request)
    {
        $data = new riview();
        $data->user_id = 1;
        $data->riview = $request->riview;

        if ($data->save()) {
            return response()->json([
                'message' => 'Data Created '
            ]);
        } else {
            return response()->json([
                'message' => 'Error  '
            ]);
        }
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'unique:users|required',
            'email'    => 'unique:users|required',
            'password' => 'required',
        ];

        $input     = $request->only('name', 'email', 'password');
        // $validator = Validator::make($input, $rules);

        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'error' => $validator->messages()]);
        // }
        $name = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $role = $request->role;
        $user     = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password), 'role' => $role]);

        return response()->json([
            'message' => 'Data Created successfully  '
        ]);
    }



    public function login(Request $request)
    {
      
 

        if (auth()->attempt(array('email' => "khalidparacha0@gmail.com", 'password' => "12345678"))) {
           
            return response()->json([
                'status' => '200'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
           
        }

    }


    public function get_packages(Request $request)
    {

        $data=Package::All();
            return response()->json([
                'status' => '200',
                'data'    => $data
            ]);
        
    }


   public function get_hotels(){
    $data=Hotel::All();
    return response()->json([
        'status' => '200',
        'data'    => $data
    ]);
   }




}
