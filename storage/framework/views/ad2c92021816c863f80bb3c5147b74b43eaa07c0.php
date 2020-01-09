<div class="section-row js-field-comment">
    <div class="section-title">
        <h2>Напишите комментарий</h2>
    </div>
    <form class="post-reply" action="<?php echo e(route('ajax.add.comment')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="input" name="message" placeholder="Message"></textarea>
                </div>
                <button class="primary-button js-submit" type="button">Submit</button>
                <button class="primary-button js-back" type="button">Back</button>
            </div>
        </div>
        <input class="js-post-id" type="hidden" value="<?php echo e($post->id); ?>" name="post_id">
    </form>
</div>

<?php $__env->startPush('scripts-in-js'); ?>
    <script src="<?php echo e(asset('js/single.post/common.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/comments/index.blade.php ENDPATH**/ ?>