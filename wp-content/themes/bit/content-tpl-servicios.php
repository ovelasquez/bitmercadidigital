<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if (have_posts()) : the_post(); ?>
    <!-- BEGIN REVOLUTION SLIDER -->
    <div class="rev_slider_wrapper">
        <div id="rev_slider" data-nav-arrows="false" data-gridheight="[480,380,300,300]" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-68" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Intro">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/tecno.jpg" alt="nature slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-22','-29']" data-fontsize="['70','70','70','50']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <?php the_title(); ?>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0" data-fontsize="[16,16,15,14]" id="slide-68-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['56','56','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">
                        <?PHP echo get_the_excerpt(); ?>


                    </div>
                </li>
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!-- BEGIN CONTACT SECTION -->
    <section class="section" style="    padding: 5rem 0 0 0;">
        <div class="container p-b-60">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </section>
    <!-- END CONTACT SECTION -->

    <!-- BEGIN FEATURES -->
    <section class="section img-cover" data-bg-img="" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -150px;"  style="    padding: 0px;">
        <div class="container">
            <div class="row m-b-1">
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
                    $delay = $delay + 100;
                endwhile;
                wp_reset_query();
                ?> 

            </div>
        </div>
    </section>
    <!-- END FEATURES -->

    <!-- BEGIN MAP FULLWIDTH --> 
    <section class="section half-section section-hg teal lighten-5">
        <div class="map" id="map-8" data-markers='{"1":{"lat":10.494088,"lng":-66.877891,"icon":"<?php echo get_template_directory_uri(); ?>/assets/img/map-markers/map-citymarket.png","title":"Bit Mercado Digital!"},"2":{"lat":10.493793,"lng":-66.875881,"icon":"<?php echo get_template_directory_uri(); ?>/assets/img/map-markers/map-metro-sabana-grande.png","title":"Estación del Metro Sabana Grande"}}'
          data-map-style="turquoise" data-plugin-options='{"zoom":16,"lat":10.494088,"lng":-66.877891,"panControl":false,"mapTypeControl":false}'></div>
        <div class="p-30">
          <div class="title">
            <h3>Nuestra Oficina Comercial</h3>
            <p>Centro Comercial CityMaket, Nivel Feria.</p>
          </div>
          <p>Cerca de la Estación del Metro de Sabana Grande, Municipio Libertador, Caracas. <br> Venezuela</p>
                    <p><strong>Teléfono</strong>: +58 212 761 24 81 / 82 91</p>                    
                    <p><strong>Email</strong>: ventas@bitmercadodigital.com</p>
        </div>
      </section>
    <!-- END MAP FULLWIDTH -->
    
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>