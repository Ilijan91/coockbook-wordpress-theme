<?php get_header(); ?>

<div class="container">
    <div class="shadow p-3 mb-5 rounded" style="background-image: url(/wp-content/themes/coockbook/assets/images/orange_background.svg)">
        <div class="container">
            <h2 class="mt-4 mb-4 text-success">Recipes</h2>
            <span class="text-success">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</span>
        </div>
    </div>
    <a href="<?php echo get_term_link('vegan', 'type'); ?>"><button type="submit" class="btn btn-success">Vegan</button></a>
    <a href="<?php echo get_term_link('vegetarian', 'type'); ?>"><button type="submit" class="btn btn-success">Vegetarian</button></a>
    <a href="http://wordpress.test/recipes/"><button type="submit" class="btn btn-primary">All Recepies</button></a>

    <hr>
    <div class="row">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'recipes');
            }
        } ?>
    </div>


</div>


<?php get_footer(); ?>