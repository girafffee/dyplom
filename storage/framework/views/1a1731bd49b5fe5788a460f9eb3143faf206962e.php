<div id="nav">

    <div id="nav-fixed">
        <div class="container">

            <div class="nav-logo">
                <a href="<?php echo e(route('home')); ?>" class="logo"><img src="<?php echo e(route('home')); ?>/img/logo.png" alt=""></a>
            </div>


            <ul class="nav-menu nav navbar-nav">
                <li><a href="<?php echo e(route('all-paginate.posts', ['category' => 'all'])); ?>">Все новости</a></li>
                <?php $__currentLoopData = $nav_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('all-paginate.posts', ['category' => $categories->slug])); ?>"><?php echo e($categories->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="cat-1"><a href="<?php echo e(route('contact.index')); ?>">Контакты</a></li>

                <?php if(auth()->guard()->guest()): ?>
                    <li class="cat-3"><a href="<?php echo e(route('register')); ?>">Регистрация</a></li>
                    <li class="cat-4"><a href="<?php echo e(route('login')); ?>">Войти</a></li>

                <?php else: ?>
                    <li class="cat-4"><a href="<?php echo e(route('logout')); ?>"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                    </li>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>

                <?php endif; ?>
            </ul>


            <div class="nav-btns">
                
                
                
            </div>

        </div>
    </div>


    

</div>
<?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/layouts/header.blade.php ENDPATH**/ ?>