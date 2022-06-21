
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

    <div class="container mt-5 bg-white">
        <h2>Package Details  </h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <button class="btn btn-success"><a href="<?php echo e(url('admin/packages')); ?>" style="color:white;text-decoration none">Add New Package </a></button>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>perks</th>
                    <th>Days </th>
                    <th>Action  </th>
               
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->type); ?></td>
                    <td><?php echo e($item->perks); ?></td>
                    <td><?php echo e($item->days); ?></td>
                    <td><button class="class btn btn-success">EDIT</button><button class="btn btn-danger ml-2">Delete</button></td>>
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Days</th>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/packagesview.blade.php ENDPATH**/ ?>