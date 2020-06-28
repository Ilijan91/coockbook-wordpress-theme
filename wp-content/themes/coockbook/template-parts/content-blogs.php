<div class="card mb-4">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <a href="<?php the_permalink(); ?>">
          <img class="img-fluid rounded" src="<?php the_post_thumbnail_url('large'); ?>" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a href="<?php the_permalink(); ?>">
          <h2 class="card-title text-warning"><?php the_title(); ?></h2>
        </a>
        <span><?php comments_number(); ?></span>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More &rarr;</a>
      </div>
    </div>
  </div>
  <div class="card-footer text-muted">
    Posted on <?php the_date(); ?> by
    <span class="text-success"> <?php echo get_the_author(); ?></span>
  </div>
</div>