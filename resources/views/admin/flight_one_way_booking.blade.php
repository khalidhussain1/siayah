@extends('admin.layout.main')
@section('content')
@include('admin.includes.statistics')
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

    <div class="container mt-5 bg-white">
    <h2>One way Booking Details </h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer name</th>
                    <th>From City</th>
                    <th>To City </th>
                    <th>Departure Date </th>
                    <th>Kids</th>
                    <th>Adults</th>
                    <th>Seniors </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                <td>{{$item->id}}</td>  
                <td>{{$item->customer->name}}</td>
                  
                    <td>{{$item->from_city}}</td>
                    <td>{{$item->to_city}}</td>
                    <td>{{$item->departure_date}}</td>
                    <td>{{$item->kids}}</td>
                    <td>{{$item->adults}}</td>
                    <td>{{$item->seniors}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <!-- <td>#</td> -->
                    <th>Category</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Kids</th>
                    <th>Adults</th>
                    <th>Rooms</th>
                </tr>
            </tfoot>
        </table>
    </div>

</section>
<section>

    <div class="container mt-5 bg-white">
        <h2>Two way Booking Details </h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer name</th>
                    <th>From City</th>
                    <th>To City </th>
                    <th>Departure Date </th>
                    <th>Kids</th>
                    <th>Adults</th>
                    <th>Seniors </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data2 as $item2)
                <tr>
                <td>{{$item->id}}</td>  
                <td>{{$item2->customer->name}}</td>
                  
                    <td>{{$item2->from_city}}</td>
                    <td>{{$item2->to_city}}</td>
                    <td>{{$item2->departure_date}}</td>
                    <td>{{$item2->kids}}</td>
                    <td>{{$item2->adults}}</td>
                    <td>{{$item2->seniors}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <!-- <td>#</td> -->
                    <th>Category</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Kids</th>
                    <th>Adults</th>
                    <th>Rooms</th>
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