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
                        CONTÁCTENOS
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0" data-fontsize="[16,16,15,14]" id="slide-68-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['56','56','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">
                        Nuestro equipo se mantendrá en contacto con usted pronto
                    </div>
                </li>
            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    
    <!-- BEGIN CONTACT SECTION -->
    <section class="section">
        <div class="container p-b-60">
            <div class="row">
                <div class="col-sm-7">                    
                        <?php the_content(); ?>                
                </div>                                
                <div class="col-sm-4 col-md-offset-1">
                    <h3 class="t-important m-t-0">Pregunte con confianza!!!</h3>
                    <p> Que un equipo de profesionales estarán dispuestos en solventar todas sus inquietudes.</p>
                    <div class="icon-rounded icon-hover icon-line m-t-20">
                        <a href="#" class="icon-google-plus" data-toggle="tooltip" title="" data-original-title="Google">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="icon-facebook" data-toggle="tooltip" title="" data-original-title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="icon-youtube" data-toggle="tooltip" title="" data-original-title="Youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="icon-vimeo" data-toggle="tooltip" title="" data-original-title="Vimeo">
                            <i class="fa fa-vimeo"></i>
                        </a>
                        <a href="#" class="icon-flickr" data-toggle="tooltip" title="" data-original-title="Flickr">
                            <i class="fa fa-flickr"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT SECTION -->
                                                                                                                                    
    <!-- BEGIN MAP FULLWIDTH --> 
    <section class="section half-section section-hg teal lighten-5">
        <div class="map" id="map-8" data-markers='{"1":{"lat":10.494088,"lng":-66.877891,"icon":"<?php echo get_template_directory_uri(); ?>/assets/img/map-markers/big-dark.png","title":"Bit Mercado Digital!"},"2":{"lat":10.493793,"lng":-66.875881,"icon":"<?php echo get_template_directory_uri(); ?>/assets/img/map-markers/blue.png","title":"Estación del Metro Sabana Grande"}}'
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