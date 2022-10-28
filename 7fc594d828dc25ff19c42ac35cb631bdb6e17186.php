<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(asset('css/css_dashbord/style_login.css')); ?>" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('css/image_site/img_icon.png')); ?>">
</head>
<body>
    <div id="app">

        
            <?php echo $__env->yieldContent('content'); ?>
        
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\agenceweb\resources\views/layouts/app.blade.php ENDPATH**/ ?>