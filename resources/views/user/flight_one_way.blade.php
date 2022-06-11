@extends('user.layout.main')
@section('content')

<div class="col-lg-12 col-md-12 mt-4 mb-12">
    <div class="card z-index-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2
                bg-transparent">
            <div class="bg-gradient-success shadow-success border-radius-lg
                  py-3 pe-1">
                <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h6 class="mb-0"> Flight One Way Booking </h6>
            <hr class="dark horizontal">
            <div class="d-flex">
                <div class="container">
                    <form method="post" action="{{route('user.flight_one_way_booking')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <lable>From City</lable>
                                <select class="form-select" aria-label="Default select example" name="from_city">
                                    <option selected>Open this select menu</option>
                                    <option value="Lahore">Lhr</option>
                                    <option value="Faisalabd">Fsd</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-3">
                                <lable>To City </lable>
                                <select class="form-select" aria-label="Default select example" name="to_city">
                                    <option selected>Open this select menu</option>
                                    <option value="Lahore">Lhr</option>
                                    <option value="Faisalabd">Fsd</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <lable>Departure Date </lable>
                                <input type="text" class="form-control custom-border" placeholder="Departure Date " name="departure">
                            </div>
                            <div class="col-md-3">
                                <lable>Kids </lable>
                                <select class="form-select" aria-label="Default select example" name="kids">
                                 
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <lable>Addults </lable>
                                <select class="form-select" aria-label="Default select example" name="adults">
                                
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Seniors </lable>
                                <select class="form-select" aria-label="Default select example" name="seniors">
                                   
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary mt-2 ">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <!-- <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p> -->
            </div>
        </div>
    </div>
</div>
@endsection 