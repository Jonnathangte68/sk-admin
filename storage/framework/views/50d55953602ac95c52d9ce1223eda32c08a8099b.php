<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="site_title">
                <span><?php echo e(config('app.name')); ?></span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo e(auth()->user()->avatar); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2><?php echo e(auth()->user()->name); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_0')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_0_1')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>GESTION</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.adds')); ?>">
                            <i class="fa fa-registered" aria-hidden="true"></i>
                            Publicidad
                        </a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.enterprise')); ?>">
                            <i class="fa fa-university"></i>
                            Mi empresa
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Content & Translations</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.text_management')); ?>">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Organizacion del Texto
                        </a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.enterprise')); ?>">
                            <i class="fa fa-american-sign-language-interpreting"></i>
                            Traducciones
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_2')); ?></h3>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_2_1')); ?>

                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('log-viewer::dashboard')); ?>">
                                    <?php echo e(__('views.backend.section.navigation.menu_2_2')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('log-viewer::logs.list')); ?>">
                                    <?php echo e(__('views.backend.section.navigation.menu_2_3')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('log-viewer::logs.list')); ?>">
                                    Traducciones
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                                Data
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.countries')); ?>">
                                    Paises
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.estados')); ?>">
                                    Estados
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.ciudades')); ?>">
                                    Ciudades
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.niveles')); ?>">
                                    Niveles
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.categorias')); ?>">
                                    Categorias
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.subcategorias')); ?>">
                                    Subcategorias
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="menu_section">
                <h3>ADMINISTRACION DEL SITIO WEB</h3>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-envelope"></i>
                                Contenido
                            <!--<span class="fa fa-chevron-down"></span>-->
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.dynamic_titles')); ?>">
                                    Titulos
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.managmail')); ?>">
                                    Keywords
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.managtemplate')); ?>">
                                    Enlaces
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.managtemplate')); ?>">
                                    Opciones de menu
                                </a>
                            </li>
                        </ul>
                        <a href="<?php echo e(route('admin.dynamic_style')); ?>">
                            <i class="fa fa-code"></i>
                                Estilo
                            <!--<span class="fa fa-chevron-down"></span>-->
                        </a>
                    </li>
                </ul>


            </div>

            <div class="menu_section">
                <h3>EMAIL MANAGEMENT</h3>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-envelope"></i>
                                Email Marketing
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.blkmail')); ?>">
                                    Bulk Mail
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.managmail')); ?>">
                                    Management 
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.managtemplate')); ?>">
                                    Templates
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
            <!--<div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_3')); ?></h3>
                <ul class="nav side-menu">
                  <li>
                      <a href="http://netlicensing.io/?utm_source=Laravel_Boilerplate&utm_medium=github&utm_campaign=laravel_boilerplate&utm_content=credits" target="_blank" title="Online Software License Management"><i class="fa fa-lock" aria-hidden="true"></i>NetLicensing</a>
                  </li>
                  <li>
                      <a href="https://photolancer.zone/?utm_source=Laravel_Boilerplate&utm_medium=github&utm_campaign=laravel_boilerplate&utm_content=credits" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Photolancer Zone</a>
                  </li>
                </ul>
            </div>-->
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
