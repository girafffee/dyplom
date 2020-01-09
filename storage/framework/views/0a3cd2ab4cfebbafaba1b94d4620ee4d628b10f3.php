<div class="media" id="<?php echo e($comment->id); ?>">
    <div class="media-left">
        <img class="media-object" src="<?php echo e(asset('img/avatar.png')); ?>" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4><?php echo e($comment->user->name); ?></h4>
            <span class="time"><?php echo e($comment->created_at->format('d.m.Y H:i:s')); ?></span>
            
        </div>
        <p><?php echo e($comment->text); ?></p>
    </div>
</div><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/comments/ajaxview.blade.php ENDPATH**/ ?>