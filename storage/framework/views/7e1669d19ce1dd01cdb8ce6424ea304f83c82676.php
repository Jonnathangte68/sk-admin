<?php $__env->startSection('content'); ?>
    <div class="m-b-md">
        <img src="<?php echo e(asset('assets/app/img/logonb.png')); ?>" alt="logo skautin"><br/>
        Skautin Administration<br>
        <a href="www.google.com">help</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>