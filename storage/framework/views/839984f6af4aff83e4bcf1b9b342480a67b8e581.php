<?php $__env->startSection('content'); ?>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="section-row">
                        <h3>Контактная информация</h3>
                        <p>Также как постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение экономической целесообразности принимаемых решений. Предварительные выводы неутешительны: внедрение современных методик, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для прогресса профессионального сообщества. А также явные признаки победы институционализации будут призваны к ответу.</p>
                        <ul class="list-style">
                            <li><p><strong>Email:</strong> <a href="mailto:sanko200065@gmail.com"><span class="__cf_email__" data-cfemail="88dfedeae5e9efc8ede5e9e1e4a6ebe7e5">[email&#160;protected]</span></a></p></li>
                            <li><p><strong>Телефон:</strong>564-56-56</p></li>
                            <li><p><strong>Адрес:</strong> ул. Лягина, 4</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="section-row">
                        <h3>Отправить сообщение</h3>
                        <form action="<?php echo e(route('contact.send')); ?>" method="POST" novalidate>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php if(auth()->guard()->guest()): ?>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Email</span>
                                        <input class="input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" value="<?php echo e(old('email', '')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="error-message"><?php echo e($errors->first('email')); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                </div>
                                <?php endif; ?>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Тема</span>
                                        <input class="input <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="subject" value="<?php echo e(old('subject', '')); ?>">
                                        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="error-message"><?php echo e($errors->first('subject')); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="message" placeholder="Message"><?php echo e(old('message', '')); ?></textarea>
                                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="error-message"><?php echo e($errors->first('message')); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <button class="primary-button">Отправить</button>
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

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/pages/contact/index.blade.php ENDPATH**/ ?>