<?php $__env->startSection('content'); ?>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="section-row">
                        <h3>Contact Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="list-style">
                            <li><p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="88dfedeae5e9efc8ede5e9e1e4a6ebe7e5">[email&#160;protected]</span></a></p></li>
                            <li><p><strong>Phone:</strong> 213-520-7376</p></li>
                            <li><p><strong>Address:</strong> 3770 Oliver Street</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="section-row">
                        <h3>Send A Message</h3>
                        <form action="<?php echo e(route('contact.send')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Email</span>
                                        <input class="input" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Subject</span>
                                        <input class="input" type="text" name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="primary-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/pages/contact.blade.php ENDPATH**/ ?>