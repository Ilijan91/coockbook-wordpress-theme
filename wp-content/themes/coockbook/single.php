<?php get_header(); ?>


<?php

if (have_posts()) {
    while (have_posts()) {
        if (in_category('blogs')) {
            the_post();

            get_template_part('template-parts/content', 'blog');
        } else {
            the_post();

            get_template_part('template-parts/content', 'recipe');
        }
    }
}



?>

<?php get_footer(); ?>