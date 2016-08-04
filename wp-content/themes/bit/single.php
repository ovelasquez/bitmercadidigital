<?php 
get_header();
//setPostViews(get_the_ID());
$categories = get_the_category();
$category = $categories[0];

//echo '<pre>';var_dump($category);echo '</pre>';die();
switch ($category->slug) {
    case 'productos':
        get_template_part('content', 'tpl-productos');
        break;
    case 'servicios':
        get_template_part('content', 'tpl-servicios');
        break;    

    default:
        get_template_part('content', 'tpl-base');
        break;
}

?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); 
