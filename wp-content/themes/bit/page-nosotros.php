<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if (have_posts()) : the_post(); ?>
    <!-- BEGIN FULLSCREEN HEADER -->
    <section id="intro" class="section section-dark " data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-nos.png">
        <div class="section-overlay bg-second" style="opacity: 0.75;"></div>
        <div class="table-wrapper">
            <div class="row m-b-50">
                <div class="container">
                    <div class="col-md-7 m-t-60">
                        <h1 class="big-title m-b-50">Bienvenidos a Bit Mercado Digital.</h1>
                        <h4 class="w-300">Somos una empresa que fusiona la comodidad de las compras en línea con la seguridad de contar con una tienda fìsica donde retirar tu producto. 
                            Estamos en la web, también en los Centro Comerciales.</h4> <br>
                            <h4 class="w-300">Hacer compras jamás  ha sido tan fácil y seguro como hasta ahora, con sólo ingresar a nuestro portal web podrás seleccionar cualquiera de nuestros productos al mejor precio del mercado nacional y elegir el método de entrega más cómodo para ti. 
                            Contamos también con servicio motorizado gratuito para la Gran Caracas.</h4>

                    </div>
                    <div class="col-md-5 ">
                        <div >
                            <img width="500" height="648" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/ico_nos.png" alt="logo" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FULLSCREEN HEADER -->


    <!-- BEGIN IMAGE CENTER -->
    <section id="discover" class="section">
        <div class="container">
            <div class="title title-center m-b-20">
                <h3>Bit Mercado Digital</h3>
                <p class="subtitle">La mejor experiencia de compra</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="m-b-40 t-center">Una plataforma digital y un gran equipo humano dispuesto a atenderte, brindándote confort y seguridad.</p>
                </div>
                <div class="col-lg-6">
                    <div class="feature-box feature-full feature-icon-right m-t-80 animated" data-animation="fadeIn" data-animation-delay="200">
                        <div class="feature-content">
                            <h3 class="feature-title">Multiples formas de pagos</h3>
                            <p>Aceptamos tu tarjeta de débito, crédito, transferencias, depósitos e incluso efectivo en todas nuestras tiendas.</p>
                        </div>
                        <div class="icon icon-gray">
                            <i class="nc-icon-outline shopping_receipt-list-42"></i>
                        </div>
                    </div>
                    <div class="feature-box feature-full feature-icon-right  animated" data-animation="fadeIn" data-animation-delay="200">
                        <div class="feature-content">
                            <h3 class="feature-title">Nuestro compromiso</h3>
                            <p>Ofrecerte los mejores precios junto al mejor servicio.</p>
                        </div>
                        <div class="icon icon-gray">
                            <i class="nc-icon-outline shopping_award"></i>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="feature-box m-t-80 animated" data-animation="fadeIn" data-animation-delay="200">
                        <div class="icon icon-gray">
                            <i class="nc-icon-outline ui-2_paragraph"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Toda la información que necesitas</h3>
                            <p>En nuestro sitio web puedes ver el artículo de tu preferencia, sus características y funciones.</p>
                        </div>
                    </div>
                    <div class="feature-box animated" data-animation="fadeIn" data-animation-delay="200">
                        <div class="icon icon-gray">
                            <i class="nc-icon-outline ui-2_like"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Precios Únicos </h3>
                            <p>Tiendas físicas y online.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END IMAGE CENTER -->

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
                    $delay = $delay + 100;
                endwhile;
                wp_reset_query();
                ?> 

            </div>
        </div>
    </section>
    <!-- END FEATURES -->
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>