<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cars dashboard</div>

                <div class="card-body">
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($car->id); ?></p>
                        <p><?php echo e($car->name); ?></p>
                        <p><?php echo e($car->desc); ?></p>
                        <p><img src="<?php echo e($car->image); ?>" alt="look"></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/car.blade.php ENDPATH**/ ?>