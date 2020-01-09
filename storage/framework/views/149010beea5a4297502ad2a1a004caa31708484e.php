
<div class="section-row">
    <div class="section-title">
        <h2 class="comments-count"><?php echo e($comments->count); ?> комментариев</h2>
    </div>
    <div class="post-comments">

        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="media" id="<?php echo e($comment->id); ?>">
                <div class="media-left">
                    <img class="media-object" src="<?php echo e(/*Voyager::image($comment->user->image)*/  asset('img/avatar.png')); ?>" alt="">
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h4><?php echo e($comment->user->name); ?></h4>
                        <span class="time"><?php echo e($comment->created_at->format('d.m.Y H:i:s')); ?></span>
                        <a href="javascript:void(0)" class="reply">Reply</a>
                    </div>
                    <p><?php echo e($comment->text); ?></p>
                    <?php $__empty_1 = true; $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($child->parent_id == $comment->id): ?>
                        <div class="media" id="<?php echo e($child->id); ?>">
                            <div class="media-left">
                                <img class="media-object" src="<?php echo e(asset('img/avatar.png')); ?>" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4><?php echo e($child->user->name); ?></h4>
                                    <span class="time"><?php echo e($child->created_at->format('d.m.Y H:i:s')); ?></span>
                                    
                                </div>
                                <p><?php echo e($child->text); ?></p>

                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>




<?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/comments/view.blade.php ENDPATH**/ ?>