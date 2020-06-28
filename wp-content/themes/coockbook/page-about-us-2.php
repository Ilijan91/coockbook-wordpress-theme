<?php
get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
  }
}
?>
<!-- Page Content -->
<div class="container">
  <h1 class="mt-4 mb-3 text-warning"><?php echo get_the_title(); ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="<?php the_post_thumbnail_url(); ?>" alt="">
    </div>
    <div class="col-lg-6">
      <h2 class="text-warning">Coockbook...</h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <!-- /.row -->
  <?php
  dynamic_sidebar("images-widget");
  ?>

  <!-- /.row -->



</div>
<!-- /.container -->

<?php get_footer(); ?>