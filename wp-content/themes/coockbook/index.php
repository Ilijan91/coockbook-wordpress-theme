<?php get_header(); ?>


<!-- Page Content -->
<div class="container">

<h1 class="mt-4 mb-3 text-warning">Blogs</h1>
<?php 
$latest_blogs = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'cat' => '7')); 
     if($latest_blogs->have_posts()){
        while($latest_blogs->have_posts(  )){
            
            $latest_blogs->the_post(  );
            
            get_template_part( 'template-parts/content', 'blogs' );
        }
}?>
<?php
    the_posts_pagination();
?>
</div>
<!-- /.container -->

<?php get_footer(); ?>