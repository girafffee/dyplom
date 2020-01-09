<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(route('home')); ?>/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo e(route('home')); ?>/css/style.css" />

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  </head>
  <body>
    <header>
      <?php echo $__env->yieldContent('header'); ?>
    </header>

    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
      <?php echo $__env->yieldContent('footer'); ?>
    </footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo e(route('home')); ?>/js/bootstrap.min.js" type="66447e4ca90858b7c833a27f-text/javascript"></script>
    <script src="<?php echo e(route('home')); ?>/js/main.js" type="66447e4ca90858b7c833a27f-text/javascript"></script>

    
    <?php echo $__env->yieldPushContent('scripts-in-js'); ?>

  </body>
</html>
<?php /**PATH /var/www/clients/client13/web60/web/dyplom/resources/views/layouts/site.blade.php ENDPATH**/ ?>