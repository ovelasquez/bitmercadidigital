<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<?php
$category = get_queried_object();
$catParID = $category->parent;

switch ($category->slug) {   
    case 'blog':
        get_template_part('category', 'tpl-blog');
        break;
    case 'servicios':
        get_template_part('category', 'tpl-servicios');
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
