<?php 
get_header(); 

if(have_posts()){
    while(have_posts()){
        the_post(  );
    }
}
?>
<!-- Page Content -->
<div class="container">
  <h1 class="mt-4 mb-3 text-warning"><?php echo get_the_title(); ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="<?php the_post_thumbnail_url();?>" alt="">
    </div>
    <div class="col-lg-6">
      <h2 class="text-warning">Coockbook...</h2>
      <p><?php the_content( ); ?></p>
    </div>
  </div>
  <!-- /.row -->

  <h2 class="text-warning">Our Team</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/member1.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title text-warning">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-success">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/member2.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title text-warning">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-success">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/member4.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title text-warning">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-success">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
       
      </div>
    </div>
  </div>
  <!-- /.row -->

 

</div>
<!-- /.container -->

<?php get_footer(); ?>