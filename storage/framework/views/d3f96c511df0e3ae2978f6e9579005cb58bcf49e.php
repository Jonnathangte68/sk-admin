<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo e(asset('assets/app/js/jquery.matchHeight-min.js')); ?>"></script>


        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


        <style type="text/css">
            body {
                background-image: url('https://picsum.photos/1600/1230/?random') !important;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>

        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/app/img/logonb.png')); ?>"/>
        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/app/img/logonb.png')); ?>"/>

        <!-- Meta title & meta -->
    <?php print app('meta')->render(); ?>

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                position:fixed;
                width:100%;
                height:20px;
                padding:5px;
                bottom:0px;
                font-size: smaller;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .top-right > a {
                color: #FFF; 
                font-weight: bold;
            }
        </style>

        <!-- Laravel variables for js -->
        <script> window.Laravel = {"locale":"en"}</script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <div class="top-right links" style="padding: 1%; background-color: lightgreen;">
                    <?php if(Route::has('login')): ?>
                        <?php if(!Auth::check()): ?>
                            <a href="<?php echo e(url('/login')); ?>"><?php echo e(__('views.welcome.login')); ?></a>
                        <?php else: ?>
                            <?php if(auth()->user()->hasRole('administrator')): ?>
                                <a href="<?php echo e(url('/admin')); ?>"><?php echo e(__('views.welcome.admin')); ?></a>
                            <?php endif; ?>
                            <a href="<?php echo e(url('/logout')); ?>"><?php echo e(__('views.welcome.logout')); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>
