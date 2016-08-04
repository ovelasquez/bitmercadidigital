<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<section class="section page-404 height-full bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-t-60">
                <h1 class="text-animate zoom">
                    <span class="words-wrapper">
                        <b class="is-visible">Parece&nbsp;que&nbsp;se&nbsp;perdió</b>
                        <b>Utiliza&nbsp;la&nbsp;búsqueda&nbsp;para&nbsp;</b>
                        <b>encontrar&nbsp;su&nbsp;camino</b>
                        <b>O&nbsp;enviar&nbsp;un&nbsp;mensaje</b>
                    </span>
                </h1>
                <a class="btn btn-hg btn-dark btn-rounded icon-left-effect" href="<?php echo get_site_url(); ?>"><i class="nc-icon-outline ui-1_home-minimal"></i><span>Ir a la página de inicio</span></a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();