<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MPWA MD V3.5.0 ,Whatsapp gateway Multi device Beta version">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="keywords" content="waapi,wa gateway, whatsapp blast, wamp, mpwa, m pedia wa gateway, wa gateway m pedia, ">
    <meta name="author" content="Ilman Sunanuddin , M pedia">
    <title><?php echo e($title); ?> | MPWA Multi device version</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/perfectscroll/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/pace/pace.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/highlight/styles/github-gist.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('plugins/jquery/jquery-3.5.1.min.js')); ?>"></script>
    <link href="<?php echo e(asset('css/main.min.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/avatars/avatar2.png')); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/avatars/avatar.png')); ?>" />


</head>

<body>
 
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.sidebar','data' => []]); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo e($slot); ?>



    <!-- Javascripts -->

<script src="<?php echo e(asset('plugins/bootstrap/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/perfectscroll/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/pace/pace.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/highlight/highlight.pack.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/blockUI/jquery.blockUI.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/blockui.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\resources\views/components/layout-dashboard.blade.php ENDPATH**/ ?>