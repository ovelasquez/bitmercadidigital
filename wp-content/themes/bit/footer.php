<!-- BEGIN FOOTER -->
<footer id="footer">
    <div id="footer-main" class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 hidden-sm-down">
                <div class="widget widget-links">
                    <div class="widget-title">
                        <h3 class="widget-title">INFORMACIÓN</h3>
                    </div>
                    <?php wp_nav_menu(array('theme_location' => 'rrss_navegation', 'container' => 'ul', 'container_class' => 'navRRSS', 'menu_class' => 'navRRSS', 'link_before' => '<span>', 'link_after' => '</span>')); ?>                    
                    <!-- REDES SOCIALES FOOTER-->
                    <?php dynamic_sidebar('redessocialesfooter'); ?>                                                                                        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hidden-md-down">
                <div class="widget widget-testimonials">
                    <h3 class="widget-title">ÚLTIMOS ARTÍCULOS</h3>
                    <div class="owl-carousel owl-theme" data-items-desktop="1" data-items-tablet="1" data-plugin-options='{"nav":false,"dots":true,"smartSpeed":1000,"autoplayTimeout":5000,"autoplay":true,"loop":true,"items":1,"margin":10}'>
                        <?php
                        $posts = new WP_Query(array('category_name' => 'blog', 'order' => 'DESC', 'posts_per_page' => '2'));
                        while ($posts->have_posts()) : $posts->the_post();
                            ?> 
                            <div class="item">
                                <div class="testimonial">
                                    <div class="testimonial-meta">
                                        <div class="testimonial-info">
                                            <p class="testimonial-name"><a href="<?php echo get_post_permalink(); ?>"> <?php the_title(); ?></a></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-content"><?PHP echo get_the_excerpt(); ?></div>

                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_query();
                        ?> 

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hidden-md-down">
                <div class="widget widget-products">
                    <h3 class="widget-title">PRODUCTOS MÁS POPULARES</h3>
                    <?php
                    $posts = new WP_Query(array('category_name' => 'productos-mas-populares', 'order' => 'DESC', 'posts_per_page' => '2'));
                    $primero = true;
                    while ($posts->have_posts()) : $posts->the_post();                        
                        ?> 

                        <div class="media product <?PHP echo ($primero) ? "p-t-0" : ""; ?>">
                            <div class="pull-left">
                                <a href="<?php echo get_post_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid"> </a>
                            </div>
                            <div class="media-body">
                                <a class="product-title" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>                                
                            </div>
                        </div>
                        <?php
                        $primero  = FALSE;
                    endwhile;
                    wp_reset_query();
                    ?>                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('videopromocionales'); ?> 
            </div>
        </div>
    </div>
    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row f-bottom">
                <div class="col-md-6">
                    <p class="copyright">Copyright © <?PHP echo date('Y'); ?> Bit Mercado Digital. Desarrollado por <a href="http://www.somostinn.net" target="_blank" style="text-decoration: none; color: #e36c1c"><b>Somos TINN</b></a></p>
                </div>
                <div class="col-sm-6 hidden-sm-down">
<!--                    <div class="payment-logo t-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/payment/paypal.png" alt="paypal">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/payment/visa.png" alt="visa">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/payment/mastercard.png" alt="mastercard">
                    </div>-->
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

</div>

<!-- BEGIN OFF FULLSCREEN SEARCH -->
<div class="search-overlay overlay-dark">
    <a href="#" class="search-overlay-close"><i class="nc-icon-outline ui-1_simple-remove"></i></a>
    <?php get_search_form(); ?>
</div>
<!-- END OFF FULLSCREEN SEARCH -->



<a href="#" class="scrollup">
    <i class="nc-icon-outline arrows-1_minimal-up"></i>
</a>

<!-- Iniciadores -->
<?php wp_footer(); ?>
</body>
</html>