<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="<?php bloginfo('language'); ?>"><!--<![endif]-->
    <!--
       _________                           ___________.__               
     /   _____/ ____   _____   ____  _____\__    ___/|__| ____   ____  
     \_____  \ /  _ \ /     \ /  _ \/  ___/ |    |   |  |/    \ /    \ 
     /        (  <_> )  Y Y  (  <_> )___ \  |    |   |  |   |  \   |  \
    /_______  /\____/|__|_|  /\____/____  > |____|   |__|___|  /___|  /
            \/             \/           \/                   \/     \/ 
    
     Desarrollado por: Somos Tinn.
     www.somostinn.net
                    
    -->
    <html lang="<?php bloginfo('language'); ?>">
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><?php bloginfo('name'); ?></title>
            <meta name="description" content="<?php bloginfo('description'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/various/apple-touch-icon.png">
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
            <?php wp_head(); ?>
        </head>

        <body data-page-type="ecommerce" class="header-light header-scroll-light footer-reveal">        
            <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- BEGIN PRELOADER -->
            <div class="loader-wrapper">
                <div class="loader-circle"></div>
            </div>
            <!-- END PRELOADER -->

            <div id="wrapper">

                <!-- BEGIN LATERAL NAVIGATION -->
                <aside id="aside-nav">
                    <div id="main-aside-navigation">
                        <div class="main-nav-wrapper">
                            <div id="aside-logo">
                                <a href="#" data-logo-light="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-aside-dark.png" data-logo-dark="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-aside-dark.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-aside-dark.png" alt="logo">
                                </a>
                            </div>
                            <nav id="main-aside-menu">
                                <?php wp_nav_menu(array('theme_location' => 'navegation', 'container' => 'ul')); ?>                                
                            </nav>
                        </div>
                    </div>
                </aside>
                <!-- END LATERAL NAVIGATION -->

                <header id="header">
                    <!-- BEGIN TOPBAR -->
                    <div id="topbar">
                        <div class="container-fluid">
                            <div class="topbar-left">
                                <?php dynamic_sidebar('contacto'); ?>                                 
                            </div>
                            <div class="topbar-right">
                                <?php dynamic_sidebar('redessocialesheader'); ?>                                                                                                   
                            </div>
                        </div>
                    </div>
                    <!-- END TOPBAR -->
                    <!-- BEGIN MAIN NAVIGATION -->
                    <div id="main-navigation" class="submenu-dark">
                        <div class="main-nav-wrapper">
                            <div class="container-fluid">
                                <div class="nav-left">
                                    <div id="logo">
                                        <a href="<?php echo get_site_url(); ?>" >
                                            <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-dark.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="nav-right">
                                    <nav id="main-menu">
                                        <?php wp_nav_menu(array('theme_location' => 'navegation', 'container' => 'ul')); ?>                                        
                                    </nav>
                                    <ul class="nav-tools">                                    
                                        <li class="search-tool">
                                            <a href="#" class="tools-btn" data-toggle-search="fullscreen">
                                                <span class="tools-btn-icon"><i class="nc-icon-outline ui-1_zoom"></i></span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu-btn">
                                            <button class="toggle-menu" data-toggle="mobile-menu" data-effect="hover">
                                                <span class="menu-label label-left">Menu</span>
                                                <i class="nc-icon-outline ui-2_menu-35"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MAIN NAVIGATION -->
                </header>

                <!-- BEGIN MAIN CONTENT -->
                <div id="main-content">

                    <?PHP if (is_front_page() && is_home()): ?>

                        <!--BEGIN REVOLUTION SLIDER -->
                        <div class = "rev_slider_wrapper">
                            <!--div id = "rev_slider" data-slider-layout = "fullscreen" data-slider-thumbnail = "true" class = "rev_slider animated" data-animation = "fadeIn" data-animation-delay = "1000" data-version = "5.0" -->

                            <div id = "rev_slider" data-slider-layout = "fullwidth" data-gridheight = "[610,480,400,400]" data-slider-thumbnail = "false" class = "rev_slider" data-version = "5.0.7">
                                <ul>
                                    <?php
                                    $postsSlider = new WP_Query(array('category_name' => 'SLIDER', 'order' => 'ASC', 'posts_per_page' => '-1'));
                                    $i = 0;
                                    while ($postsSlider->have_posts()) : $postsSlider->the_post();
                                        ?>

                                        <!--SLIDE 1 -->
                                        <li data-color = "light" data-index = "rs-125<?PHP echo $i; ?>" data-transition = "fade" data-slotamount = "7" data-easein = "default" data-easeout = "default" data-masterspeed = "1500" data-rotate = "0" data-fstransition = "fade" data-fsmasterspeed = "1000" data-fsslotamount = "7" data-saveperformance = "off">
                                            <!--MAIN IMAGE -->                                            

                                            <img src = "<?php the_post_thumbnail_url(); ?>" alt = "nature" width = "1600" height = "514" data-bgposition = "center top" data-bgfit = "cover" data-bgrepeat = "no-repeat" class = "rev-slidebg" data-no-retina>
<!--                                            <div class = "tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" id = "slide-274-layer-1" data-x = "center" data-hoffset = "0" data-y = "middle" data-voffset = "0" data-width = "full" data-height = "full" data-whitespace = "normal" data-transform_idle = "o:1;" data-transform_in = "opacity:0;s:1500;e:Power3.easeInOut;" data-start = "1000" data-basealign = "slide" data-responsive_offset = "on" style = "background-color:rgba(0, 0, 0, 0.3);">
                                            </div>-->
                                            <!--LAYER NR. 1 -->
                                            <div class = "tp-caption tp-caption-title tp-resizeme rs-parallaxlevel-0" data-x = "center" data-hoffset = "0" data-y = "center" data-voffset = "['-80','-60','-40','-100']" data-transform_in = "y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out = "y:[100%];s:1000;s:1000;" data-mask_in = "x:0px;y:0px;s:inherit;e:inherit;" data-mask_out = "x:inherit;y:inherit;s:inherit;e:inherit;" data-start = "500" data-responsive_offset = "on" data-lineheight = "['60','50','45','40']"   data-fontsize = "['50','40','35','30']" data-whitespace = "normal" style = "">
                                                <?php the_title(); ?> 
                                            </div>
                                            <!--LAYER NR. 2 -->
                                            <div class = "tp-caption tp-caption-line tp-resizeme rs-parallaxlevel-0" data-x = "center" data-hoffset = "0" data-y = "center" data-voffset = "['40',30','15','-40']" data-transform_in = "x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out = "x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in = "x:0px;y:0px;s:inherit;e:inherit;" data-mask_out = "x:inherit;y:inherit;s:inherit;e:inherit;" data-start = "500" data-responsive_offset = "on">
                                                <img src = "<?php echo get_template_directory_uri(); ?>/assets/img/various/whitebar.png" alt = "whitebar" width = "350" height = "2" data-ww = "['350px','280px','240px','200px']" data-hh = "2px" data-no-retina>
                                            </div>
                                            <!--LAYER NR. 3 -->
                                            <div class = "tp-caption tp-caption-subtitle tp-resizeme rs-parallaxlevel-0" data-x = "center" data-hoffset = "0" data-y = "center" 
                                                 data-voffset = "['80',80','40','0']" data-transform_in = "y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                                 data-transform_out = "y:[100%];s:1000;s:1000;" data-mask_in = "x:0px;y:0px;" data-mask_out = "x:inherit;y:inherit;" 
                                                 data-start = "500" data-responsive_offset = "on"  data-lineheight = "['20','20','16','14']" 
                                                 data-fontsize = "['20','20','16','14']"   >
                                                <?PHP echo get_the_excerpt(); ?>
                                            </div>
                                            <!--LAYER NR. 4 -->
                                            <div class = "tp-caption" data-x = "center" data-hoffset = "0" data-y = "center" data-voffset = "['165','155','120','105']" data-transform_in = "y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out = "y:[100%];s:1000;s:1000;" data-mask_in = "x:0px;y:0px;" data-mask_out = "x:inherit;y:inherit;" data-start = "500" data-responsive_offset = "on">
                                                <?PHP the_content(); ?>
                                            </div>
                                        </li>                                   

                                        <?php
                                        $i++;
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </ul>
                                <div class = "tp-bannertimer tp-bottom" style = "visibility: hidden !important;"></div>
                            </div>
                        </div>
                        <!--END REVOLUTION SLIDER -->
                        <?php
                    endif;
                    ?>
