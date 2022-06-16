
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->id); ?></td>  
                <td><?php echo e($item->customer->name); ?></td>
                  
                    <td><?php echo e($item->from_city); ?></td>
                    <td><?php echo e($item->to_city); ?></td>
                    <td><?php echo e($item->departure_date); ?></td>
                    <td><?php echo e($item->kids); ?></td>
                    <td><?php echo e($item->adults); ?></td>
                    <td><?php echo e($item->seniors); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->id); ?></td>  
                <td><?php echo e($item2->customer->name); ?></td>
                  
                    <td><?php echo e($item2->from_city); ?></td>
                    <td><?php echo e($item2->to_city); ?></td>
                    <td><?php echo e($item2->departure_date); ?></td>
                    <td><?php echo e($item2->kids); ?></td>
                    <td><?php echo e($item2->adults); ?></td>
                    <td><?php echo e($item2->seniors); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/flight_one_way_booking.blade.php ENDPATH**/ ?>