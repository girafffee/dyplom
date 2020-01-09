<?php $__env->startSection('content'); ?>

    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                            <h3><?php echo e($post->seo_title != NULL ? $post->seo_title : $post->title); ?></h3>
                            <?php echo $post->body; ?>


                        </div>
                        
                    </div>

                    <?php echo $__env->make('comments.view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if(auth()->guard()->check()): ?>
                        <?php echo $__env->make('comments.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <?php echo $__env->make('comments.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>

                </div>

                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>

    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="post-header" class="page-header">
        <div class="background-img" style="<?php echo e($header_style); ?>"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="category.html">JavaScript</a>
                        <span class="post-date">
                            <?php echo e($post->created_at->format('d.m.Y')); ?>

                        </span>
                    </div>

                    <h1><?php echo e($post->title); ?></h1>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/posts/single.blade.php ENDPATH**/ ?>