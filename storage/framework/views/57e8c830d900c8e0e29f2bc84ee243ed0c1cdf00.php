<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php print app('meta')->render(); ?>

        
        <?php echo e(Html::style(mix('assets/app/css/app.css'))); ?>


        
        <?php echo $__env->yieldContent('styles'); ?>

        
        <?php echo $__env->yieldContent('head'); ?>

        <style type="text/css">
            .xjk {
                margin-top: 2%;
                margin-left:35%;
            }
        </style>
    </head>
    <body class="<?php echo $__env->yieldContent('body_class'); ?>">

        
        <?php echo $__env->yieldContent('page'); ?>

        
        <?php echo e(Html::script(mix('assets/app/js/app.js'))); ?>


        
        <script> window.Laravel = {"locale":"en"}</script>

        
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
