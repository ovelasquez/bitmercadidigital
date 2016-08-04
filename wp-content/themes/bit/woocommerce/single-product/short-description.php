<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $post;

if (!$post->post_excerpt) {
    return;
}
?>
<p> <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt) ?></p>

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