<?php get_header(); ?>

<div class="container">
    <?php
    $blogs = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'cat' => '7'));
    $recipes = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'cat' => '8'));
    if (is_page('recipes')) { ?>
        <div class="shadow p-3 mb-5 rounded" style="background-image: url(/wp-content/themes/coockbook/assets/images/orange_background.svg)">
            <div class="container">
                <h2 class="mt-4 mb-4 text-success">Recipes</h2>
                <span class="text-success">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</span>
            </div>
        </div>
        <div class="row">
            <?php if ($recipes->have_posts()) {
                while ($recipes->have_posts()) {
                    $recipes->the_post();
                    get_template_part('template-parts/content', 'recipes');
                }
            } ?>
        </div>
    <?php } else {
        if ($blogs->have_posts()) {
            while ($blogs->have_posts()) {
                $blogs->the_post();
                get_template_part('template-parts/content', 'blogs');
            }
        }
    }
    ?>
</div>


<?php get_footer(); ?>