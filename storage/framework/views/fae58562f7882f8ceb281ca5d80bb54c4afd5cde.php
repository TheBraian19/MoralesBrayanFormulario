<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $__env->startSection('formulario'); ?>
    <form action="<?php echo e(action('PruebasController@validar')); ?>" method = "POST">

    <?php echo e(csrf_field()); ?>


            <input type="text" name = "user" placeholder = "Usuario">
            <input type="password" name = "pass" placeholder = "Contraseña">
            <input type="submit" value = "Enviar">
        </form>

    <?php echo $__env->yieldSection(); ?>
</body>
</html><?php /**PATH C:\laragon\www\formulario-\resources\views/orden/formulario.blade.php ENDPATH**/ ?>