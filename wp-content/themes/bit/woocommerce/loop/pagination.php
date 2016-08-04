<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
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
 * @version     2.2.2
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $wp_query;

if ($wp_query->max_num_pages <= 1) {
    return;
}
?>

<?php
$max = intval($wp_query->max_num_pages);
$pageC = max(1, get_query_var('paged'));
$paginate_links = paginate_links(array(
    'base' => esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false)))),
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'prev_next' => false,
        ));
if ($paginate_links) {
    ?>
    <nav class="pagination-wrapper">
        <ul class="pagination">
            <?PHP
            echo '<p class="pagExhibits"><a href="' . (($pageC - 1 > 0) ? esc_url(get_pagenum_link($pageC - 1)) : '#') . '" class="btnPrevious btnPag" title="Previous">Anterior</a> ' . $paginate_links . ' <a href="' . (($pageC + 1 <= $max) ? esc_url(get_pagenum_link($pageC + 1)) : '#') . '" class="btnNext btnPag" title="Next">Siguiente</a></p>';
            ?>

        </ul> 
    </nav>
    <?PHP
}
?>




<!--echo '<li >'. $paginate_links . ' <a href="' . (($pageC + 1 <= $max) ? esc_url(get_pagenum_link($pageC + 1)) : '#') . '" aria-label="Next"><span aria-hidden="true"><i class="nc-icon-glyph arrows-1_strong-right"></i></span></a></li>';-->