
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
                <h6 class="mb-0">Update Package Details Form </h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <!-- <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="height:400px"> -->
                
                    <form class="form-control" method="post" action="<?php echo e(route('admin.updatepackage')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" class="form-control custom-border" placeholder=" id " name="id" value="<?php echo e($data->id); ?>">
                        <div class="form-row">
                            <div class="col">
                                <lable>Psckage Name </lable>
                                <input type="text" class="form-control custom-border" placeholder=" Name " name="name" value="<?php echo e($data->name); ?>">
                            </div>
                            <div class="col">
                                <lable>Hotel Type</lable>
                                <select class="custom-select" style="border-top:none;border-left:none" name="type" >
                                    <!-- <option selected>Select Type  </option> -->
                                    <option value="<?php echo e($data->type); ?>"><?php echo e($data->type); ?></option>
                                    <option value="Five Star">Five Star </option>
                                    <option value="Four Star">Four Star   </option>
                                    <option value="Three Star">Three Star   </option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                         
                            <div class="col">
                                <lable>Perks  </lable>
                                <select class="custom-select" style="border-top:none;border-left:none" name="perks">
                                    <!-- <option selected>Select Perk  </option> -->
                                    <option value="<?php echo e($data->perks); ?>"><?php echo e($data->perks); ?></option>
                                    <option value="Lunch + Break Fast">Lunch + Break Fast  </option>
                           

                                </select>
                            </div>
                            <div class="col-md-6">
                                <lable>Days  </lable>
                                <select class="custom-select" style="border-top:none;border-left:none" name="days" >
                                    <!-- <option selected>Select Days </option> -->
                                    <option value="<?php echo e($data->days); ?>"><?php echo e($data->days); ?></option>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/admin/update_packages.blade.php ENDPATH**/ ?>