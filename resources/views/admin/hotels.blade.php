@extends('admin.layout.main')
@section('content')
@include('admin.includes.statistics')
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

    <div class="container mt-5 bg-white">
        <!-- <h2>Hotel Details  </h2> -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <div class="d-flex justify-content-between space-between " >
       <h3 style="margin-top:10px">Hotel Details </h3>
        <button class="btn btn-success" style="margin-top:10px"><a href="{{url('admin/add_hotels')}}" style="color:white;text-decoration none">Add New Hotel </a></button>
       </div>
    
       <div class="row">
          <div class="col-lg-8 col-md-6 mb-md-0">
           
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr style="text-align: left;">
                        <th class="text-uppercase text-secondary text-xxs
                          font-weight-bolder opacity-7" style="color:black !important">ID</th>
                        <th class="text-uppercase text-secondary text-xxs
                          font-weight-bolder opacity-7 ps-2" style="color:black !important">Name </th>
                          <th class="text-uppercase text-secondary text-xxs
                          font-weight-bolder opacity-7 ps-2" style="color:black !important">Address  </th>
                          <th class="text-uppercase text-secondary text-xxs
                          font-weight-bolder opacity-7 ps-2" style="color:black !important">Price </th>
                          <th class="text-uppercase text-secondary text-xxs
                          font-weight-bolder opacity-7 ps-2"style="color:black !important">Action </th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $item)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column
                              justify-content-center">
                              <p class="mb-0 text-sm" style="color:#7a7878b5" >{{$item->id}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column
                              justify-content-center">
                              <p class="mb-0 text-sm">{{$item->name}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column
                              justify-content-center">
                              <p class="mb-0 text-sm">{{$item->address}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column
                              justify-content-center">
                              <p class="mb-0 text-sm">{{$item->price}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column
                              justify-content-center">
          <div class="">
          <button class="btn btn-primary" style="    padding: 0px;
    margin: 0px;
    height: 20px;
    width: 52px;
    font-size: 12px;"><a href="{{ route('admin.updatehotel', ['id'=>$item->id]) }}" style="color:white;text-decoration:none">Edit</a></button>
         <button class="btn btn-danger" style="    padding: 0px;
    margin: 0px;
    height: 20px;
    width: 52px;
    font-size: 12px;"><a href="{{ route('admin.deletehotel', ['id'=>$item->id]) }}" style="color:white;text-decoration:none">Delete</a></button>
             <button class="btn btn-primary" style="    padding: 0px;
    margin: 0px;
    height: 20px;
    width: 52px;
    font-size: 12px;"><a href="{{ route('admin.viewhotel', ['id'=>$item->id]) }}" style="color:white;text-decoration:none">View</a></button>
          </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                 @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    
        </div>




        
    </div>

</section>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection