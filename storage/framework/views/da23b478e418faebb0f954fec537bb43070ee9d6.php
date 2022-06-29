
<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('admin.includes.statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" /> -->
<section>

<    <div class="container mt-5 bg-white">
        <!-- <h2>Hotel Details  </h2> -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <div class="d-flex justify-content-between space-between " >
       <h3 style="margin-top:10px">Hotel Details </h3>
        <button class="btn btn-success" style="margin-top:10px"><a href="<?php echo e(url('admin/add_hotels')); ?>" style="color:white;text-decoration none">Add New Hotel </a></button>
       </div>
    
       <div class="row">
          <div class="col-lg-8 col-md-6 mb-md-0">
           
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
                <img src="<?php echo e(asset('img/bookingimages/'.$item->image)); ?>" />

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/hotelimages.blade.php ENDPATH**/ ?>