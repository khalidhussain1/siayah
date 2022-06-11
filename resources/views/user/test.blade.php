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
            <h6 class="mb-0"> Covid Test  </h6>
            <hr class="dark horizontal">
            <div class="d-flex">
                <div class="container">
                    <form>


                        <div class="row">



                            <div class="col-md-6">
                                <lable>Date</lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name ">
                            </div>
                            <div class="col-md-6">
                                <lable>Select No  </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name ">
                            </div>
                            <div class="col-md-3">
                                <lable>Name  </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name ">
                            </div>
                            <div class="col-md-3">
                                <lable>Date of birth </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name ">
                            </div>
                            <div class="col-md-3">
                                <lable>Number  </lable>
                        
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