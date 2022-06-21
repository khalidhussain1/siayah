@extends('admin.layout.main')
@section('content')
@include('admin.includes.statistics')
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

    <div class="container mt-5 bg-white">
        <h2>Hotel Details  </h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <button class="btn btn-success"><a href="{{url('admin/add_hotels')}}" style="color:white;text-decoration none">Add New Hotel </a></button>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Action </th>
               
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->price}}</td>
                    <td><button class="class btn btn-success">EDIT</button><button class="btn btn-danger ml-2">Delete</button></td>>
                    
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Price</th>
                     <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

</section>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection