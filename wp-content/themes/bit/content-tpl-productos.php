<?php if (have_posts()) : the_post(); ?> 
    <div id="shop">
        <div class="product-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="product-slider" class="flexslider manual">
                            <ul class="slides">
                                <li class="easyzoom easyzoom--adjacent" data-thumb="<?php the_post_thumbnail_url(); ?>">
                                    <a href="#">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </li>                               
                            </ul>
                        </div>                        
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="product-name"><?php the_title(); ?></div>
                        <!--<div class="product-quick-desc">Comfortable sport touch</div>-->
                        <div class="product-top-info clearfix">
                            <div class="product-price"></div>                           
                        </div>
                        <p> <?PHP echo get_the_excerpt(); ?></p>

                        <div class="product-info">
                            <div class="feature-box" style="margin-bottom: 0px;">
                                <div class="icon icon-simple" style="margin-right: 0px;">
                                    <i class="nc-icon-outline ui-1_check-square-11"></i>
                                </div>
                                <div class="feature-content" style="padding-top: 14px;">
                                    <h3 class="feature-title">Producto disponible</h3>

                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg icon-left-effect open-modal-contact btn btn-lg btn-dark btn-square icon-left-effect"><i class="nc-icon-outline ui-1_email-85"></i><span>Contáctenos ya</span></button>
                            <p>O llámanos por los teléfonos:  +58 212 761 24 81 / 82 91</p>
                        </div>

                        <hr>

                        <div class="m-b-10">
                            <p class="quickview-title">Medios de Pago</p>
                            <div class="tags">
                                <a href="#" rel="tag">T. Crédito</a>
                                <a href="#" rel="tag">Depósito</a>
                                <a href="#" rel="tag">Transferencia</a>
                            </div>
                        </div>

                        <div class="m-b-10">
                            <p class="quickview-title">Compartir</p>
                            <div class="icon-rounded icon-hover icon-line icon-sm">
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
                        <p class="quickview-title">Etiquetas</p>
                        <div class="tags">
                            <?php the_tags('', '', ''); ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="product-info">
                <ul class="product-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#info" data-toggle="tab" role="tab">Detalles</a>
                    </li>              
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="info" role="tabpanel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <?PHP the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN MODAL CONTACT -->
    <div class="slickModal" data-plugin-options='{"windowWidth":"600px","windowLocation":"center","windowTransitionEffect":"slideBottom","closeButton":"icon","reopenClass":"open-modal-contact"}'>
        <div class="window modal-lg">
            <div class="wrapper white-modal">
                <div class="p-30">
                    <h3 class="m-t-0 t-important t-center">Contáctanos</h3>
                    <?php
                    $el_slug = 'formulario-productos';
                    $args = array(
                        'name' => $el_slug,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 1
                    );
                    $content_post = get_posts($args);
                    if ($content_post) {
                        foreach ($content_post as $envio) : setup_postdata($envio);
                            the_content();
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL CONTACT -->
    </div>
<?php else : ?>
    <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php
endif;
