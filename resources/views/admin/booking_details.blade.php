@extends('admin.layout.main')
@section('content')
@include('admin.includes.statistics')
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

    <div class="container mt-5 bg-white">
        <h2>Hotel Bookings </h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                    <th>Customer</th>
                    <th>Category</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Kids</th>
                    <th>Adults</th>
                    <th>Rooms</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->customer->name}}</td>
                    <td>{{$item->category}}</td>
                    <td>{{$item->departure_date}}</td>
                    <td>{{$item->arrival_date}}</td>
                    <td>{{$item->kids}}</td>
                    <td>{{$item->adults}}</td>
                    <td>{{$item->rooms}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Customer</th>
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