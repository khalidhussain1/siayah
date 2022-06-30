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
                <h6 class="mb-0">Update Package Details Form </h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <!-- <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="height:400px"> -->
                
                    <form class="form-control" method="post" action="{{route('admin.updatepackage')}}">
                        @csrf
                        <input type="hidden" class="form-control custom-border" placeholder=" id " name="id" value="{{$data->id}}">
                        <div class="form-row">
                            <div class="col">
                                <lable>Psckage Title </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name " name="package_title" value="{{$data->package_title}}">
                            </div>
                            <div class="col">
                                <lable>Price </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name " name="price" value="{{$data->price}}">
                               

                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                         
                        <div class="col-md-6">
                                <lable>Nights </lable>
                                <select class="custom-select" style="border-top:none;border-left:none" name="nights" >
                                    <!-- <option selected>Select Days </option> -->
                                    <option value="{{$data->days}}">{{$data->nights}}</option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="">7 </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Days  </lable>
                                <select class="custom-select" style="border-top:none;border-left:none" name="days" >
                                    <!-- <option selected>Select Days </option> -->
                                    <option value="{{$data->days}}">{{$data->days}}</option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="">7 </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                        
                          <!-- <div class="col-md-6">
                                <lable>Images  </lable>
                                <input type="file" class="form-control" id="customFile" name="images[]" multiple />
                            </div> -->
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