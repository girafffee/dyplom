<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cars dashboard</div>

                <div class="card-body">
                    <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($vendor->id); ?></p>
                        <p><?php echo e($vendor->name); ?></p>
                        <p><?php echo e($vendor->site); ?></p>
                        <div>
                          <ul>


                          <?php $__currentLoopData = $vendor->car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($car->name); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/vendor/all.blade.php ENDPATH**/ ?>