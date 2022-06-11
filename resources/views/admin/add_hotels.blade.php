@extends('admin.layout.main')
@section('content')
<!-- @include('admin.includes.statistics') -->

<!-- <div class="card">
    <div class="card-header p-3 pt-2">
        <form class="form-control">
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>

            </div>
        </form>

    </div>
</div> -->

<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card" style="height: 400px;">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Hotel Details Form </h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <!-- <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="height:400px"> -->
                    <form class="form-control">
                        <div class="form-row">
                            <div class="col">
                                <lable>Hotel Name</lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name ">
                            </div>
                            <div class="col">
                                <lable>Hotel Location</lable>
                                <input type="text" class="form-control custom-border" placeholder="Location ">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <lable>Check In </lable>
                                <input type="text" class="form-control custom-border" placeholder=" In">
                            </div>
                            <div class="col">
                                <lable>Check Out </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Out ">
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <lable>Price Range </lable>
                                <input type="text" class="form-control custom-border" placeholder="Price">
                            </div>
                            <div class="col">
                                <lable>Status </lable>
                                <select class="custom-select" style="border-top:none;border-left:none">
                                    <option selected>Select Status </option>
                                    <option value="1">Active </option>
                                    <option value="2">Disable </option>

                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" style="float: right;">
                                Submit Details
                            </button>
                        </div>
                    </form>
                    <!-- </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection