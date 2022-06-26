
<?php $__env->startSection('content'); ?>

<div class="col-lg-12 col-md-12 mt-4 mb-12">
    <div class="card z-index-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2
                bg-transparent">
            <div class="bg-gradient-success shadow-success border-radius-lg
                  py-3 pe-1">
                <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h6 class="mb-0"> Hotel Booking </h6>
            <hr class="dark horizontal">
            <div class="">
                <div class="container">
                    <form method="post" action="<?php echo e(route('user.hotelbooking')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <lable>Category</lable>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="Normal">Normal</option>
                                    <option value="Luxury">Luxury</option>

                                </select>
                            </div>

                            <div class="col-md-3">
                                <lable>Departure </lable>
                                <input type="text" class="form-control custom-border" placeholder="Departure Date " name="departure">
                            </div>
                            <div class="col-md-3">
                                <lable>Arrival </lable>
                                <input type="text" class="form-control custom-border" placeholder="Arrival Date " name="arrival">
                            </div>


                            <div class="col-md-3">
                                <lable>Kids </lable>
                                <select class="form-select" aria-label="Default select example" name="kids">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <lable>Addults </lable>
                                <select class="form-select" aria-label="Default select example" name="adults">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <lable>Rooms </lable>
                                <select class="form-select" aria-label="Default select example" name="rooms">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="Single">Signle </option>
                                    <option value="Double">Double </option>

                                </select>
                            </div>



                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary mt-2 " type="submit">
                                Submit
                            </button>
                        </div>
                </div>
                </form>
            </div>
            <!-- <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p> -->
        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\siayah\resources\views/user/hotel_booking.blade.php ENDPATH**/ ?>