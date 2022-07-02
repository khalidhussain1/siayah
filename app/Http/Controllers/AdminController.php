<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\Payment;
use App\Models\ProjectMedia;
use App\Models\FlightOneWayBooking;
use App\Models\FlightTwoWayBooking;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Update;
use App\Notifications\RegisteraccountlNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\PaymentRequest;
use App\Models\Covidtest;
use App\Models\HotelImage;
use App\Models\PackageImage;
use App\Models\PackageFacility;

use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller
{
    public function  create_user(Request $request)
    {
        // dd($request->password);
        $p=$request->password;
         User::create([
            'name' => $request->firstname,
            'email' => $request->email,
            'role'  => $request->role,
            'type'  => $request->type,
            'password' => Hash::make($p),
        ]);
        // $data = new User();
        // $data->name = $request->firstname;
        // $data->email = $request->email;
        // $data->password = Hash::make($request->passowrd);
        // $data->role = $request->role;
        // $data->type=$request->type;
        // $data->save();

        return redirect()->back()->with('success', 'User Has been addedd successfully');
    }

    function users()
    {

        $data = User::get();

        return view('Admin.users', compact('data'));
    }
    function update_user(Request $req)
    {


        $validated = $req->validate([

            'email' => 'email|unique:users,email,' . $req->id

        ]);
        $data = User::find($req->id);
        $data->name = $req->name;

        $data->email = $req->email;
        $data->update();
        return back()->with('success', 'User Update Successfully');
    }
    function delete($id)
    {


        $data = User::find($id);

        $data->delete();
        return back()->with('success', 'User Delete Successfully');
    }

    public function user_details($id)
    {
        $data = User::find($id);
        return $data;
    
    }

    public function chat_visibility(Request $request)
    {

        $sent = DB::table('ch_messages')
            ->where('to_id', $request->from)
            ->where('from_id', $request->to)->get();
        $recived = DB::table('ch_messages')
            ->where('to_id', $request->to)
            ->where('from_id', $request->from)->get();

        return view('Admin.chat-visibility', compact('sent', 'recived'));

        // return view('Admin.chat-visibility')->with('success','No data Found ');

    }

    public function messages()
    {
        return view('Admin.chat-option');
    }



  


public function payroll(){

    $data=Project::all();
    

    return view('Admin.payroll',compact('data'));
}

public function post_project(Request $request){

    return view('Admin.postproject');
}

public function post(Request $request ){

    $data = new ProjectDetail();
    if ($request->hasFile('sample')) {

        $file = $request->file('sample');
        $extension = $request->sample->extension();
        $fileName = time() . "_." . $extension;
        $request->sample->move('upload/projectimages/', $fileName);
        $data->sample = $fileName;
    }
    $data->title = $request->title;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->industry = $request->industry;
    $data->intrested = $request->intrested;
    $data->budget = $request->budget;
    $data->date = $request->date;
    $data->recomendation    = $request->recomendation;
    $data->description = $request->description;
    $data->save();
    
// $user=User::find(25);
$user=ProjectDetail::latest()->first();



    // $user->notify(new RegisteraccountlNotification($user));
    $details = [
        'title' => 'Sign up!',
        'body' => 'http://127.0.0.1:8000/register   
        
        '
    ];
   
    Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));

    return redirect()->back()->with('success','Project Posted Successfully ');
    
}

public function payment_status(){
    $data=PaymentRequest::where('employee_id',Auth()->user()->id)->get();
    // dd($data);
    return view('Admin.status',compact('data'));
}  

public function requests(){
    
    $data=PaymentRequest::where('status',0)->get();
    // dd($data);

    return view('Admin.requests',compact('data'));
}

public function statuschnage($id){
    $affected = DB::table('payment_requests')
              ->where('id', $id)
              ->update(['status' => 1]);
              $data=PaymentRequest::where('id',$id)->get();
         return redirect()->back()->with('success','Withdraw Approved Successfully ');
  
}

public function hotel_booking_details(){
$data=Booking::all();
return view('admin.booking_details')->with('data',$data);
}
public function onewaybooking(){
    $data=FlightOneWayBooking::all();
    $data2=FlightTwoWayBooking::all();
return view('admin.flight_one_way_booking')->with('data',$data)->with('data2',$data2);
// return "working";
}

public function hotelsubmission(Request $request){

// dd($request->cover);
//storing cover image 
if ($request->hasFile('cover')) {
    $filee = $request->cover;
    $imageName =  rand(1,100) . '.' . $filee->getClientOriginalExtension();
    $imagePath = $filee->move(public_path('img/bookingimages'), $imageName);
}



  $data=new Hotel();
  $data->name=$request->name;
  $data->address=$request->address;
  $data->price=$request->price;
   $data->cover= $imageName;
   $data->path="img/bookingimages";
   $data->description= $request->description;
  $data->save();
  $record=Hotel::latest()->first();
 
    $files=$request->file('images');

 
    if ($request->hasFile('images')) {
    foreach($files as $file) {
        $imagesmodel=new HotelImage();
    $extension=$file->extension();
    $fileName=rand(1,100)."_.".$extension;
    $file->move('img/bookingimages',$fileName);
    $imagesmodel->hotel_id=$record->id;
     $imagesmodel->image=$fileName;
     $imagesmodel->save();
    }   
// }
    }


  Alert::success('Congrats', 'Hotel Added Successfuly ');
  return redirect()->back();
    // return view('admin.add_hotels');
}


public function hotels(Request $request){
    $data=Hotel::all();
      return view('admin.hotels')->with('data',$data);
  }




  public function p(){

    $data=Package::all();
      return view('admin.packagesview')->with('data',$data);
  }

public function packagesubmission(Request $request){
//package basic details submission 
$data= new Package();
$data->package_title=$request->package_title;
$data->hotel_id=$request->hotel_id;
$data->price=$request->price;
$data->days=$request->days;
$data->nights=$request->nights;
$data->save();
//Storing package images 
$record=Package::latest()->first();
$files=$request->file('images');
if ($request->hasFile('images')) {
    foreach($files as $file) {
     $packagesmodel=new PackageImage();
    $extension=$file->extension();
    $fileName=rand(1,100)."_.".$extension;
    $file->move('img/packageimages',$fileName);
    $packagesmodel->package_id=$record->id;
    $packagesmodel->image=$fileName;
    $packagesmodel->path="img/packageimages";

     $packagesmodel->save();
    }
}
//Storing facilities 
$facilities=$request->facilities;
foreach($facilities as $facility) {
    $facilitiesmodel=new PackageFacility();
    $facilitiesmodel->package_id=$record->id;
    $facilitiesmodel->facilities=implode(",",(array)$facility);
    $facilitiesmodel->save();
   }
Alert::success('Congrats', 'Package Added Succefuly  ');
return redirect()->back();
}
public function update_package($id){
   $data=Package::find($id)->first();

   return view('admin.update_packages')->with('data',$data);
}

public function update_package_submission(Request $request){
$data=Package::find($request->id);
$data->package_title=$request->package_title;
$data->days=$request->days;
$data->nights=$request->nights;
$data->price=$request->price;
$data->save();
Alert::success('Congrats', 'Package updated Successfuly ');
return redirect()->back();
}
public function deletepackage($id){
  $data=Package::find($id)->delete();
  Alert::success('Congrats', 'Package Deleted  Successfuly ');
  return redirect()->back();
}


public function deletehotel($id){
    $data=Hotel::find($id)->delete();
    Alert::success('Congrats', 'Hotel deleted Successfuly ');
    return redirect()->back();
  }

public function update_hotel($id){
    $data=Hotel::find($id)->first();

    return view('admin.update_hotels')->with('data',$data);

}
  public function update_hotel_submission(Request $request){
    $data=Hotel::find($request->id);
    $data->name=$request->name;
    $data->address=$request->address;
    $data->price=$request->price;
     $data->status=$request->status;
    $data->save();
    Alert::success('Congrats', 'Hotel Updated  Successfuly ');
    return redirect()->back();

  }

public function covid_details(){
    $data=Covidtest::all();

   return view('admin.coviddetailpage')->with('data',$data);
}

public function payments(){
    $data=Payment::all();
   return view('admin.payments')->with('data',$data);
}

public function history(){

    return "history tab is in progress... ";
}

public function viewhotel($id){
 
$data=HotelImage::where('hotel_id',$id)->get();


return view('admin.hotelimages')->with('data',$data);


}
 
public function viewpackage($id){
 
    $data=PackageImage::where('package_id',$id)->get();
    $facility=PackageFacility::where('package_id',$id)->get();

    return view('admin.packageimages')->with('data',$data)->with('facility',$facility);
}

}
