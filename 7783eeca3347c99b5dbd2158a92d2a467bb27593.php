<?php $__env->startComponent('mail::message'); ?>
# Introduction

Bonjour Monsieur JADOR,<br>
Nous avons reçu votre message et nous communiquerons avec
 vous dans les heures qui viennent.

<?php $__env->startComponent('mail::button', ['url' => $url]); ?>
Accéder au site web
<?php echo $__env->renderComponent(); ?>

Merci de ne pas répondre à ce mail.<br>
Pour tous besion écrivez à bissodigital@gmail.com votre agence web<br><hr>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\agenceweb\resources\views/emails/markdown-test.blade.php ENDPATH**/ ?>