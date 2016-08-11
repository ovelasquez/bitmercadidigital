<?php

/**
 * Crear nuestros menús gestionables desde el 
 * administrador de Wordpress.
 */
function bit_menus() {
    register_nav_menus(
            array(
                'navegation' => 'Menú de navegación',
                'site_navegation' => 'Menú de navegación del sitio',
                'rrss_navegation' => 'Menú de navegación de las redes sociales',
            )
    );
}

add_action('init', 'bit_menus');

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
function bit_widgets() {
    register_sidebar(
            array(
                'name' => __('Sidebar'),
                'id' => 'sidebar',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Slider'),
                'id' => 'slider',
                'before_widget' => '<div class="rev_slider_wrapper">',
                'after_widget' => '</div>'
            )
    );
    register_sidebar(
            array(
                'name' => __('Call to action'),
                'id' => 'calltoaction',
                'before_widget' => '<div class="action-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<span style="display: none">',
                'after_title' => '</span>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Video Promocionales'),
                'id' => 'videopromocionales',
                'before_widget' => '<div class="widget widget-video">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Redes Sociales Footer'),
                'id' => 'redessocialesfooter',
                'before_widget' => '<div class="icon-rounded icon-hover icon-line m-t-20">',
                'after_widget' => '</div>',
                'before_title' => '<span style="display: none">',
                'after_title' => '</span>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Redes Sociales Header'),
                'id' => 'redessocialesheader',
                'before_widget' => '<div class="topbar-social icon-hover">',
                'after_widget' => '</div>',
                'before_title' => '<span style="display: none">',
                'after_title' => '</span>'
            )
    );
    register_sidebar(
            array(
                'name' => __('Contacto'),
                'id' => 'contacto',
                'before_widget' => '<div class="topbar-text">',
                'after_widget' => '</div>',
                'before_title' => '<span style="display: none">',
                'after_title' => '</span>'
            )
    );
    register_sidebar(
            array(
                'name' => __('Newsletter'),
                'id' => 'newsletter',
                'before_widget' => ' <div class="widget widget-newsletter">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
            )
    );

    register_sidebar(
            array(
                'name' => __('Tags'),
                'id' => 'tags',
                'before_widget' => ' <div class="widget widget-tags">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
            )
    );
}

add_action('init', 'bit_widgets');

/**
 * Filtrar resultados de búsqueda para que solo muestre 
 * posts en el listado
 */
function buscar_solo_posts($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts', 'buscar_solo_posts');

/**
 * scripts de la página
 */
function bit_scripts() {
    wp_enqueue_style('bit-fonts', 'https://fonts.googleapis.com/css?family=Satisfy%7CMontserrat:400,700%7COpen+Sans:300,400,700,800%7CRaleway:100,300,400,700,800,900%7CSumana%7CGloria+Hallelujah', false, false, false);
//    wp_enqueue_style('bit-min', get_template_directory_uri() . '/assets/css/min/min.css?v=2', false, false, false);    
    wp_enqueue_style('bit-font-awesome', get_template_directory_uri() . '/assets/js/libs/font-awesome/css/font-awesome.min.css', false, false, false);
    wp_enqueue_style('bit-bootstrap', get_template_directory_uri() . '/assets/js/libs/bootstrap/dist/css/bootstrap.min.css', false, false, false);
    wp_enqueue_style('bit-nucleo', get_template_directory_uri() . '/assets/css/icons/nucleo.css', false, false, false);
    wp_enqueue_style('bit-tether', get_template_directory_uri() . '/assets/js/libs/tether/dist/css/tether.min.css', false, false, false);
    wp_enqueue_style('bit-flexslider', get_template_directory_uri() . '/assets/js/libs/flexslider/flexslider.css', false, false, false);
    wp_enqueue_style('bit-carousel', get_template_directory_uri() . '/assets/js/libs/owl.carousel/dist/assets/owl.carousel.css', false, false, false);
    wp_enqueue_style('bit-default', get_template_directory_uri() . '/assets/js/libs/owl.carousel/dist/assets/owl.theme.default.min.css', false, false, false);
    wp_enqueue_style('bit-bxslider', get_template_directory_uri() . '/assets/js/libs/bxslider-4/dist/jquery.bxslider.min.css', false, false, false);
    wp_enqueue_style('bit-slick', get_template_directory_uri() . '/assets/js/libs/slick-carousel/slick/slick.css', false, false, false);
    wp_enqueue_style('bit-revolution', get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/css/settings.css', false, false, false);
    wp_enqueue_style('bit-revolution-conf', get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/css/navigation.css', false, false, false);
    wp_enqueue_style('bit-magnific', get_template_directory_uri() . '/assets/js/libs/magnific-popup/dist/magnific-popup.css', false, false, false);
    wp_enqueue_style('bit-video', get_template_directory_uri() . '/assets/js/libs/video.js/dist/video-js/video-js.min.css', false, false, false);
    wp_enqueue_style('bit-videojs', get_template_directory_uri() . '/assets/js/libs/videojs-sublime-skin/dist/videojs-sublime-skin.min.css', false, false, false);
    wp_enqueue_style('bit-select2', get_template_directory_uri() . '/assets/js/libs/select2/dist/css/select2.min.css', false, false, false);
    wp_enqueue_style('bit-bootstrap-tagsinput', get_template_directory_uri() . '/assets/js/libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', false, false, false);
    wp_enqueue_style('bit-bootstrap-datepicker', get_template_directory_uri() . '/assets/js/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css', false, false, false);
    wp_enqueue_style('bit-animate', get_template_directory_uri() . '/assets/js/libs/animate.css/animate.min.css', false, false, false);
    wp_enqueue_style('bit-solarized_dark', get_template_directory_uri() . '/assets/js/libs/highlightjs/styles/solarized_dark.css', false, false, false);
    wp_enqueue_style('bit-toastr', get_template_directory_uri() . '/assets/js/libs/toastr/toastr.min.css', false, false, false);
    wp_enqueue_style('bit-fullcalendar', get_template_directory_uri() . '/assets/js/libs/fullcalendar/dist/fullcalendar.min.css', false, false, false);
    wp_enqueue_style('bit-minified', get_template_directory_uri() . '/assets/js/plugins/slick-modal/sm-minified.css', false, false, false);
    wp_enqueue_style('bit-colors', get_template_directory_uri() . '/assets/css/colors.css', false, false, false);
    wp_enqueue_style('bit-footers', get_template_directory_uri() . '/assets/css/footers.css', false, false, false);
    wp_enqueue_style('bit-form', get_template_directory_uri() . '/assets/css/form.css', false, false, false);
    wp_enqueue_style('bit-blog', get_template_directory_uri() . '/assets/css/blog.css', false, false, false);
    wp_enqueue_style('bit-events', get_template_directory_uri() . '/assets/css/events.css', false, false, false);
    wp_enqueue_style('bit-builder', get_template_directory_uri() . '/assets/css/builder.css', false, false, false);
    wp_enqueue_style('bit-overview', get_template_directory_uri() . '/assets/css/overview.css', false, false, false);
    wp_enqueue_style('bit-buttons', get_template_directory_uri() . '/assets/css/buttons.css', false, false, false);
    wp_enqueue_style('bit-main', get_template_directory_uri() . '/assets/css/main.css', false, false, false);
    wp_enqueue_style('bit-masonry', get_template_directory_uri() . '/assets/css/masonry.css', false, false, false);
    wp_enqueue_style('bit-nav', get_template_directory_uri() . '/assets/css/nav.css', false, false, false);
    wp_enqueue_style('bit-hover-effects', get_template_directory_uri() . '/assets/css/hover-effects.css', false, false, false);
    wp_enqueue_style('bit-ecommerce', get_template_directory_uri() . '/assets/css/ecommerce.css', false, false, false);
    wp_enqueue_style('bit-portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', false, false, false);
    wp_enqueue_style('bit-preloader', get_template_directory_uri() . '/assets/css/preloader.css', false, false, false);
    wp_enqueue_style('bit-pricing-tables', get_template_directory_uri() . '/assets/css/pricing-tables.css', false, false, false);
    wp_enqueue_style('bit-team', get_template_directory_uri() . '/assets/css/team.css', false, false, false);
    wp_enqueue_style('bit-text-animation', get_template_directory_uri() . '/assets/css/text-animation.css', false, false, false);
    wp_enqueue_style('bit-pages', get_template_directory_uri() . '/assets/css/pages.css', false, false, false);
    wp_enqueue_style('bit-sliders', get_template_directory_uri() . '/assets/css/sliders.css', false, false, false);
    wp_enqueue_style('bit-themes', get_template_directory_uri() . '/assets/css/themes.css', false, false, false);
    wp_enqueue_style('bit-ui', get_template_directory_uri() . '/assets/css/ui.css', false, false, false);
    wp_enqueue_style('bit-widgets', get_template_directory_uri() . '/assets/css/widgets.css', false, false, false);
    wp_enqueue_style('bit-restaurant', get_template_directory_uri() . '/assets/css/restaurant.css', false, false, false);
    wp_enqueue_script('bit-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3-respond-1.4.2.min.js', array('jquey'), '2.8.3', false);
}

add_action('wp_enqueue_scripts', 'bit_scripts');

function bit_scripts_footer() {
    //wp_enqueue_script('bit-min', get_template_directory_uri().'/assets/js/min/min.js?v=2', array('min'), false, false);
    echo '
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery/dist/jquery.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/gsap/src/minified/TweenMax.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/tether/dist/js/tether.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/superfish/dist/js/superfish.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/appear/jquery.appear.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery.scrollspeed/jQuery.scrollSpeed.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery-backstretch/src/jquery.backstretch.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/skrollr/dist/skrollr.min.js"></script>  
        <script src="' . get_template_directory_uri() . '/assets/js/libs/select2/dist/js/select2.full.min.js"></script> 
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootstrap-validator/dist/validator.min.js"></script> 
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>   
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootpag/lib/jquery.bootpag.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/highlightjs/highlight.pack.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery-countTo/jquery.countTo.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery.countdown/dist/jquery.countdown.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/easyticker-jquery/jquery.easy-ticker.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery.fitvids/jquery.fitvids.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/video.js/dist/video-js/video.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/raty/lib/jquery.raty.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/toastr/toastr.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/easyzoom/dist/easyzoom.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/isotope/dist/isotope.pkgd.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/fullpage.js/dist/jquery.fullpage.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/portfolio-ajax/js/jquery.colio.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/moment/moment.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/flexslider/jquery.flexslider-min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bxslider-4/dist/jquery.bxslider.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/slick-carousel/slick/slick.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>                
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>                
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jflickrfeed/jflickrfeed.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jribbble/dist/jribbble.min.js"></script>
        <script async defer src="http://assets.pinterest.com/js/pinit.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/gmaps/gmaps.min.js"></script> 
        <script src="' . get_template_directory_uri() . '/assets/js/libs/Chart.js/Chart.min.js"></script> 
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jquery-knob/dist/jquery.knob.min.js"></script> 
        <script src="' . get_template_directory_uri() . '/assets/js/libs/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/velocity/velocity.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/velocity/velocity.ui.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/jQuery-One-Page-Nav/jquery.nav.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/libs/multiscroll.js/jquery.multiscroll.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/plugins/slick-modal/jquery.slick-modals.min.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/blog.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/charts.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/ecommerce.js?v=2"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/map.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/masonry.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/navigation.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/overview.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/portfolio.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/portfolio_builder.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/search.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/text_animation.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/restaurant.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/builder.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/sliders.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/main.js"></script>
        <script src="' . get_template_directory_uri() . '/assets/js/widgets.js"></script>';
}

add_action('wp_print_footer_scripts', 'bit_scripts_footer');

function bit_search_form($form) {
    $form = '<form id="searchform" class="searchform" role="search" method="get" action="' . home_url('/') . '">
        <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Buscar" />       
        <button type="submit"><i class="nc-icon-outline ui-1_zoom-split"></i></button>
    </form>';

    return $form;
}

add_filter('get_search_form', 'bit_search_form');

add_theme_support('post-thumbnails');
add_image_size('homepage-slider', 1600, 514, true);


// Numero de productos a mostar en la tienda / Productos
add_filter('loop_shop_per_page', create_function('$cols', 'return 10;'), 20);


remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_action('send_headers', 'add_header_seguridad');

function add_header_seguridad() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1;mode=block');
}

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if (!is_numeric($count)) {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
