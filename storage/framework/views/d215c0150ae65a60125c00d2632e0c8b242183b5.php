
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->customer->name); ?></td>
                    <td><?php echo e($item->category); ?></td>
                    <td><?php echo e($item->departure_date); ?></td>
                    <td><?php echo e($item->arrival_date); ?></td>
                    <td><?php echo e($item->kids); ?></td>
                    <td><?php echo e($item->adults); ?></td>
                    <td><?php echo e($item->rooms); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/booking_details.blade.php ENDPATH**/ ?>