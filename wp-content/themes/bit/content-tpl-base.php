<section class="section-page">
    <div class="container-large">
        <div class="row">
            <div id="page-content" class="col-xl-9 col-lg-8 p-t-60">
                <div class="row m-b-50">
                    <div class="col-md-12">
                        <!-- Contenido del post -->
                        <?php if (have_posts()) : the_post(); ?>
                            <header>
                                <h1><?php the_title(); ?></h1>                               
                            </header>                                                        
                            <p><span class="dropcap"></span><?php the_content(); ?></p>
                            <!-- Archivo de barra lateral por defecto -->
                        <?php else : ?>
                            <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>                                         
            </div>
            <div class="sidebar-right col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="widget widget-search">
                        <form>
                            <div class="append-icon">
                                <input type="text" class="form-control input-lg" placeholder="Search article...">
                                <button class="btn" type="submit">
                                    <i class="nc-icon-outline ui-1_zoom"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget-newsletter">
                        <h3 class="widget-title">Subscribe to Newsletter</h3>
                        <p>Get latest news and awesome offers!</p>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="nc-icon-outline ui-1_send"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tags">
                            <a href="#">Music</a>
                            <a href="#">Design</a>
                            <a href="#">Web</a>
                            <a href="#">Photo</a>
                            <a href="#">Culture</a>
                            <a href="#">Sport</a>
                            <a href="#">Street Art</a>
                            <a href="#">Video</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>