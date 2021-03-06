
<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('admin.includes.statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

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
                    <form class="form-control" enctype="multipart/form-data" method="post" action="<?php echo e(route('admin.hotelsubmission')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="col">
                                <lable>Hotel Name</lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name " name="name" >
                            </div>
                            <div class="col">
                                <lable>Hotel Location</lable>
                                <input type="text" class="form-control custom-border" placeholder="Location " name="address" >
                            </div>
                        </div>
                        <div class="form-row mt-3">
                         
                            <div class="col">
                                <lable>Price Range </lable>
                                <input type="text" class="form-control custom-border" placeholder="Price" name="price" >
                            </div>
                            
                            <div class="col-md-3">
                                <lable>Cover </lable>
                                <input type="file" class="form-control custom-border" placeholder="Price" name="cover" >
                            </div>
                            <div class="col-md-3">
                                <lable>Images  </lable>
                                <input type="file" class="form-control custom-border" id="customFile" name="images[]" multiple />
                            </div>
                        </div>
                        </div>
                        <div class="form-row mt-3">
                                   <div class="w-100" style="   
                                        padding: 3px;   
                                        width: 1020px;
                                        margin-left: 18px;">
                                   <textarea style="border:2px solid grey;margin-top:125px" class="form-control" id="textAreaExample1" rows="4" name="description"></textarea>
                            <!-- <label class="form-label" for="textAreaExample">Message</label> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/add_hotels.blade.php ENDPATH**/ ?>