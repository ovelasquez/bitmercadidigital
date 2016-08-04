<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if (empty($product) || !$product->is_visible()) {
    return;
}


$MiProps = wc_get_product_attachment_props(get_post_thumbnail_id(), $product);
$miProducto= wc_get_product();
 

//echo $product['post_title'];
?>

<div class="item animated" data-animation="zoomIn">
                            <div class="item-wrapper">
                                <div class="post">
                                    
                                    <div class="post-medias">
                                        <figure class="he-2 no-caption">                                        
                                            <img src="<?php echo $MiProps['url'] ?>" alt="<?php echo $miProducto->get_title(); ?>" />
                                            <div class="hover-icons">
                                                <div class="hover-icons-wrapper">
                                                    <p><?php echo $miProducto->get_title(); ?></p>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    
                                    <div class="post-info">
                                        <h2 class="post-title"><a href="<?php echo $miProducto->get_permalink(); ?>"><?php echo $miProducto->get_title(); ?></a></h2>

                                        <div class="post-excerpt">
                                            <p></p>
                                        </div>
                                        <a href="<?php echo $miProducto->get_permalink(); ?>" class="more">Leer más</a>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>

