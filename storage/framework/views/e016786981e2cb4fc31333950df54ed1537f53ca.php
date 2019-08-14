<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="<?php echo e(route('admin.edit_page', 'landing')); ?>">LANDING</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="<?php echo e(route('admin.edit_page', 'about_us')); ?>">ABOUT US</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="<?php echo e(route('admin.edit_page', 'terms_of_user_and_privacy')); ?>">TERMS OF USE & PRIVACY</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="<?php echo e(route('admin.edit_page', 'language')); ?>">LANGUAGE</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="<?php echo e(route('admin.edit_page', 'contact_us')); ?>">CONTACT US</a>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <?php echo e(Html::script('assets/admin/js/textcontent.js')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>