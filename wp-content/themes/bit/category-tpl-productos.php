
<!-- BEGIN REVOLUTION SLIDER -->
<div class="rev_slider_wrapper">
    <div id="rev_slider" data-nav-arrows="false" data-gridheight="[480,380,300,300]" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
        <ul>
            <!-- SLIDE  -->
            <li data-index="rs-68" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Intro">
                <!-- MAIN IMAGE -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/line.jpg" alt="nature slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-68-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-22','-29']" data-fontsize="['70','70','70','50']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">PRODUCTOS
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0" data-fontsize="[16,16,15,14]" id="slide-68-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['56','56','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">
                    Adquiere nuestros productos de forma segura y económica.
                </div>
            </li>
        </ul>
        <div class="tp-static-layers"></div>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->

<!-- BEGIN BLOG - PRODUCTOS -->
<section class="section-blog">
    <div class="row">
        <div id="blog-main" class="col-hg-12 col-lg-12">
            <div class="blog-wrapper">
                <div class="posts masonry masonry-layout grid grid-3">
                    <?php
                    $posts = new WP_Query(array('category_name' => 'productos', 'order' => 'ASC', 'posts_per_page' => '-1'));
                    while ($posts->have_posts()) : $posts->the_post();
                        ?>    

                        <div class="item animated" data-animation="zoomIn">
                            <div class="item-wrapper">
                                <div class="post">
                                    
                                    <div class="post-medias">
                                        <figure class="he-2 no-caption">                                        
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                            <div class="hover-icons">
                                                <div class="hover-icons-wrapper">
                                                    <p><?php the_title(); ?></p>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    
                                    <div class="post-info">
                                        <h2 class="post-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h2>

                                        <div class="post-excerpt">
                                            <p><?PHP echo get_the_excerpt(); ?></p>
                                        </div>
                                        <a href="<?php echo get_post_permalink(); ?>" class="more">Leer más</a>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>       
                </div>

                <nav class="pagination-wrapper">                    
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="nc-icon-glyph arrows-1_strong-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>        
    </div>
</section>
<!-- END PRODUCTOS -->