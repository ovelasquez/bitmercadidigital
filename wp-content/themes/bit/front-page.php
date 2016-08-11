<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<section class="section-call-to-action section-dark" style='background-image: url("<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/full-19.jpg"); background-repeat: no-repeat; background-size: cover; margin-top: 20px'>
    <div class="container">
        <?php dynamic_sidebar('calltoaction'); ?>   

    </div>
</section>


<!-- BEGIN PRODUCTOS -->
<section id="categories" class="m-10 m-b-0">
    <div class="masonry grid grid-4">
        <?php
        $posts = new WP_Query(array('category_name' => 'inhome', 'order' => 'ASC', 'posts_per_page' => '-1'));
        $i = 0;
        while ($posts->have_posts()) : $posts->the_post();
            $classI = get_post_meta(get_the_ID(), 'class', true);
            ?>            
            <div class="item <?php echo $classI; ?>">
                <div class="item-wrapper">
                    <a href="<?PHP echo get_the_excerpt(); ?>">
                        <figure class="he-center black-white-effect">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> " />                            
                        </figure>
                    </a>
                </div>
            </div>
            <?php
            $i++;
        endwhile;
        wp_reset_query();
        ?>        
    </div>
</section>
<!-- END PRODUCTOS -->



<!-- BEGIN SERVICIOS -->
<section class="section section-dark" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/full-18.jpg" data-start="background-position:0px 0px;" data-top-bottom="background-position:0px 0px;">
    <div class="container">
        <div class="row">
            <?php
            $posts = new WP_Query(array('category_name' => 'SERVICIOS', 'order' => 'ASC', 'posts_per_page' => '3'));
            while ($posts->have_posts()) : $posts->the_post();
                $icono = get_post_meta(get_the_ID(), 'icono', true);
                ?>    
                <div class="col-lg-4 col-md-6 animated" data-animation="fadeIn" data-animation-delay="200">
                    <div class="feature-box feature-lg center">
                        <div class="icon icon-simple " style="    width: 225px;    height: 225px;    vertical-align: middle;">
                            <div class="circulo"></div>
                            <i class="nc-icon-outline <?PHP echo $icono; ?>" style="   padding-top: 25%;    color: white;    font-size: 8rem; width: 225px;    height: 225px; position: relative;"></i>
                        </div>
                        <a href="<?php echo get_post_permalink(); ?>"><h3 class="c-white"  style="font-size: 2.5rem;"><?php the_title(); ?> </h3></a>
                        
                        <p style=" font-size: 1.5em; color: #FFF; "><?PHP echo get_the_excerpt(); ?></p>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_query();
            ?> 
        </div>
    </div>
</section>
<!-- END SERVICIOS -->

<!-- BEGIN LOGOS CAROUSEL - MAYORISTAS -->
<div class="section container">
    <div class="row">
        <div class="col-md-12">
            <div class="title title-center m-b-0">
                <?PHP $categoria = get_category_by_slug("mayoristas-para-pop"); ?>
                <h3> <?PHP echo $categoria->name; ?></h3>
                <p class="subtitle"><?PHP echo $categoria->category_description; ?></p>
            </div>
            <div class="owl-carousel owl-theme clients m-b-0 animated" data-animation="fadeIn" data-animation-delay="200" data-items-desktop="5" 
                 data-items-tablet="3" data-plugin-options='{"autoplay":false,"nav":true,"smartSpeed":1000,"items":5,"margin":0}'>
                <?php
                $posts = new WP_Query(array('category_name' => 'mayoristas-para-pop', 'order' => 'ASC', 'posts_per_page' => '-1'));
                while ($posts->have_posts()) : $posts->the_post();
                    ?>    
                    <div class="item">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                    </div>                    
                    <?php
                endwhile;
                wp_reset_query();
                ?> 

            </div>
        </div>
    </div>
</div>
<!-- END LOGOS CAROUSEL -->

<!-- BEGIN TESTIMONIALS -->
<section class="section section-dark" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/ecommerce/full-5.jpg" 
         data-start="background-position:0px 0px;" data-top-bottom="background-position:0px -220px;">
    <div class="container">
        <div class="row">
            <div class="title title-center m-b-0">
                <?PHP $categoria = get_category_by_slug("testimoniales"); ?>
                <h3><?PHP echo $categoria->name; ?></h3>
                <p class="subtitle"><?PHP echo $categoria->category_description; ?></p>
            </div>
            <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 animated" data-animation="fadeIn" data-animation-delay="200">
                <div class="review_top_ornament ornament-light">
                    <div class="review_top_ornament_line"></div>
                    <div class="review_top_ornament_quotemark">„</div>
                    <div class="review_top_ornament_line"></div>
                </div>
                <div class="bx-slider" data-plugin-options='{"pagerCustom":"#testimonials-pager","pager":true,"mode":"fade"}'>
                    <?php
                    $posts = new WP_Query(array('category_name' => 'testimoniales', 'order' => 'ASC', 'posts_per_page' => '-1'));
                    while ($posts->have_posts()) : $posts->the_post();
                        ?>                     
                        <div class="testimonial">
                            <p class="comment"><?php the_content(); ?> </p>
                            <h5 class="happy-client"><?php the_title(); ?></h5>
                            <span class="client-info"><?php echo get_the_date(); ?>  </span>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?> 
                </div>
                <div class="review_bottom_ornament ornament-light">
                    <div class="review_bottom_ornament_line"></div>
                    <div class="review_bottom_ornament_triangle"></div>
                    <div class="review_bottom_ornament_line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TESTIMONIALS -->

<!-- BEGIN FEATURES -->
<section class="section img-cover" data-bg-img="" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -150px;">
    <div class="container">
        <div class="row m-b-20">
            <?php
            $posts = new WP_Query(array('category_name' => 'valores', 'order' => 'ASC', 'posts_per_page' => '4'));
            while ($posts->have_posts()) : $posts->the_post();
                $delay = 200;
                $icono = get_post_meta(get_the_ID(), 'icono', true);
                ?> 
                <div class="col-lg-3 col-md-6 animated" data-animation="fadeIn" data-animation-delay="<?PHP echo $delay; ?>">
                    <div class="feature-box feature-lg center">
                        <div class="icon icon-simple">
                            <i class="nc-icon-outline <?PHP echo $icono; ?>"></i>
                        </div>
                        <h3 class="c-dark"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?>  </p>
                    </div>
                </div>
                <?php
                $delay = $delay+100;
            endwhile;
            wp_reset_query();
            ?> 

        </div>
    </div>
</section>
<!-- END FEATURES -->
</div>
<!-- END MAIN CONTENT -->

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); 