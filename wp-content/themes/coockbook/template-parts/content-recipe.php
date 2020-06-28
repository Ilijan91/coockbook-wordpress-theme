<!-- Page Content -->
<div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="text-warning float-left fixed-top-left"><?php echo get_the_title(); ?></h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <?php the_content(); ?>
        </div>
    </div>
</div>