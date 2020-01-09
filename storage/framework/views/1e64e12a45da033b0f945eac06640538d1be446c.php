<?php $__env->startSection('header'); ?>

    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($category)): ?>
    <div class="page-header <?php echo e($category->href_classes); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><?php echo e($category->name); ?></li>
                    </ul>
                    <h1><?php echo e($category->name); ?></h1>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($loop->first): ?>
                                <div class="col-md-12">
                                    <div class="post post-thumb">
                                        <a class="post-img" href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><img src="<?php echo e(Voyager::image($post->image)); ?>" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category <?php echo e($post->category->href_classes); ?>"
                                                   href="<?php echo e(route('all-paginate.posts', ['category' => $post->category->slug ])); ?>">
                                                    <?php echo e($post->category->name); ?>

                                                </a>
                                                <span class="post-date"><?php echo e($post->created_at->format('d.m.Y')); ?></span>
                                            </div>
                                            <h3 class="post-title"><a href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><?php echo e($post->title); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                        <?php elseif($loop->iteration == 2 || $loop->iteration == 3): ?>
                                <div class="col-md-6">
                                    <div class="post">
                                        <a class="post-img" href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><img src="<?php echo e(Voyager::image($post->image)); ?>" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category <?php echo e($post->category->href_classes); ?>"
                                                   href="<?php echo e(route('all-paginate.posts', ['category' => $post->category->slug ])); ?>">
                                                    <?php echo e($post->category->name); ?>

                                                </a>
                                                <span class="post-date"><?php echo e($post->created_at->format('d.m.Y')); ?></span>
                                            </div>
                                            <h3 class="post-title">
                                                <a href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><?php echo e($post->title); ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                        <?php elseif($loop->iteration == 4): ?>
                                <div class="clearfix visible-md visible-lg"></div>
                        <?php else: ?>
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img" href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><img src="<?php echo e(Voyager::image($post->image)); ?>" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category <?php echo e($post->category->href_classes); ?>"
                                                   href="<?php echo e(route('all-paginate.posts', ['category' => $post->category->slug ])); ?>">
                                                    <?php echo e($post->category->name); ?>

                                                </a>
                                                <span class="post-date"><?php echo e($post->created_at->format('d.m.Y')); ?></span>
                                            </div>
                                            <h3 class="post-title"><a href="<?php echo e(route('single.post', ['slug' => $post->slug])); ?>"><?php echo e($post->title); ?></a></h3>
                                            <p><?php echo e($post->excerpt); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <div class="col-md-8">
                                <h3>Нет записей по категории <?php echo e($category['name']); ?></h3>
                            </div>
                    <?php endif; ?>
                    </div>
                    <?php echo e($posts->links()); ?>

                </div>

                <div class="col-md-4">
                   
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/posts/all-paginate.blade.php ENDPATH**/ ?>