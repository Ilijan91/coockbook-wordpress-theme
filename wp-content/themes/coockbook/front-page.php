<?php get_header(); ?>

<?php if (is_front_page()) { ?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url('/wp-content/themes/coockbook/assets/images/header.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Daily healthy meal plans to reach your optimum health & fitness</h3>
            <p>We can deliver unusual ideas!</p>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('/wp-content/themes/coockbook/assets/images/header2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece </h3>
            <p>We can deliver unusual ideas!</p>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('/wp-content/themes/coockbook/assets/images/header3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</h3>
            <p>We can deliver unusual ideas!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
<?php } ?>

<div class="container">
  <?php
  // the query
  $latest_recipes = new WP_Query(array('post_type' => 'recipes', 'post_status' => 'publish', 'posts_per_page' => 8)); ?>
  <h1 class="my-4 text-center"><a class="text-warning" href="#">Latest Recipes</a></h1>
  <div class="row">
    <?php if ($latest_recipes->have_posts()) : ?>

      <!-- the loop -->
      <?php while ($latest_recipes->have_posts()) : $latest_recipes->the_post(); ?>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url('large'); ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php the_permalink(); ?>" class="text-warning"><?php the_title(); ?></a>
            </h4>
            <p class="card-text text-success">by <?php echo get_the_author(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php _e('Sorry, no recipes at this time.'); ?></p>
    <?php endif; ?>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

<div style="background-image: url(/wp-content/themes/coockbook/assets/images/orange_background.svg)">
  <div class="container">
    <br>
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="/wp-content/themes/coockbook/assets/images/Middle section images@2x.png" alt="">
      </div>
      <div class="col-lg-6">
        <?php
        dynamic_sidebar("main-text-widget");
        ?>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- /.container -->
<div class="container">
  <h1 class="mt-4 mb-3 text-center text-warning">Blog</h1>
  <div class="row">
    <?php
    // the query
    $latest_blogs = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3)); ?>
    <?php if ($latest_blogs->have_posts()) : ?>
      <!-- the loop -->
      <?php while ($latest_blogs->have_posts()) : $latest_blogs->the_post(); ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url('large'); ?>" alt="super dairy free ice cream sundaes"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php the_permalink(); ?>" class="text-warning"><?php the_title(); ?></a>
            </h4>
            <p class="card-text text-success">by <?php echo get_the_author(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- end of the loop -->
      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php _e('Sorry, no blogs at this time.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<!-- /.container -->
<?php get_footer(); ?>