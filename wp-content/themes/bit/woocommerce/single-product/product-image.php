<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
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
 * @version     2.6.3
 */
if (!defined('ABSPATH')) {
    exit;
}

global $post, $product;
?>

<div class="col-md-6">
    <div id="product-slider" class="flexslider manual">
        <ul class="slides">
            <?php
            if (has_post_thumbnail()) {
                $attachment_count = count($product->get_gallery_attachment_ids());
                $gallery = $attachment_count > 0 ? '[product-gallery]' : '';
                $MiProps = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
                $image = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
                    'title' => $MiProps['title'],
                    'alt' => $MiProps['alt'],
                ));
                ?>

                <li class="easyzoom easyzoom--overlay" data-thumb="<?php echo $MiProps['url'] ?>">
                    <a href="<?php echo $MiProps['url'] ?>">
                        <img src="<?php echo $MiProps['url'] ?>" alt="<?php echo $MiProps['alt'] ?>">
                    </a>
                </li>

                <?PHP
                $attachment_ids = $product->get_gallery_attachment_ids();
                if ($attachment_ids) {
                    foreach ($attachment_ids as $attachment_id) {
                        $props = wc_get_product_attachment_props($attachment_id, $post);
                        if (!$props['url']) {
                            continue;
                        }
                        ?>  
                        <li class="easyzoom easyzoom--overlay" data-thumb="<?php echo $props['url'] ?>">
                            <a href="<?php echo $props['url'] ?>">
                                <img src="<?php echo $props['url'] ?>" alt="<?php echo $props['alt'] ?>">
                            </a>
                        </li>             
                        <?php
                    }
                }
            } else {
                echo apply_filters('woocommerce_single_product_image_html', sprintf('<img src="%s" alt="%s" />', wc_placeholder_img_src(), __('Placeholder', 'woocommerce')), $post->ID);
            }
            ?>
        </ul> 
    </div>

    <div id="product-slider-thumbnails" class="flexslider manual">
        <ul class="slides">                
            <li>
                <a href="#">
                    <img src="<?php echo $MiProps['url'] ?>" alt="<?php echo $MiProps['alt'] ?> ">
                </a>
            </li>
            <?php
            $attachment_ids = $product->get_gallery_attachment_ids();
            if ($attachment_ids) {
                foreach ($attachment_ids as $attachment_id) {
                    $props = wc_get_product_attachment_props($attachment_id, $post);

                    if (!$props['url']) {
                        continue;
                    }
                    if ($MiProps['url'] != $props['url']) {
                        ?>  
                        <li>
                            <a href="#">
                                <img src="<?php echo $props['url'] ?>" alt="<?php echo $props['alt'] ?> ">
                            </a>
                        </li>                    
                        <?php
                    }
                }
                ?>  
            </ul>
        </div>
        <?php
    }
    ?>                

    
</div>

