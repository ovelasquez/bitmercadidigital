<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<?php
$category = get_queried_object();
$catParID = $category->parent;

switch ($category->slug) {
    case 'productos':
        get_template_part('category', 'tpl-productos');
        break;
    case 'blog':
        get_template_part('category', 'tpl-blog');
        break;
    case 'preguntas':
        get_template_part('category', 'tpl-preguntas');
        break;

    default:
        get_template_part('category', 'tpl-base');
        break;
}
?>
<!-- Archivo de pié global de Wordpress -->
<?php
get_footer();
