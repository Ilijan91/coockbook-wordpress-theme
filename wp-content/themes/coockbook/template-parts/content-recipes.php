<div class="col-lg-4 col-sm-6 portfolio-item">
    <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url('large'); ?>" alt=""></a>
    <div class="card-body">
        <h5 class="card-title">
            <a href="<?php the_permalink(); ?>" class="text-warning"><?php the_title(); ?></a>
        </h5>
        <p class="card-text text-success">by <?php echo get_the_author(); ?></p>
    </div>
</div>