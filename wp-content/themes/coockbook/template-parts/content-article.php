<div class="container">

<h1 class="mt-4 mb-3 text-warning"><?php echo get_the_title(); ?></h1>
      <span class="text-success">by
      <?php echo get_the_author(); ?>
      </span>
    <div class="row">

<!-- Post Content Column -->
<div class="col-lg-8">
        <img class="img-fluid rounded" src="<?php the_post_thumbnail_url();?>" alt="">

        <hr>
        <p>Posted on <?php the_date();?>, <?php comments_number();?></p>
        <hr>
        <!-- Post Content -->
        <?php the_content( );?>
   
        <hr>


       <?php
        comments_template(  );
       ?>

      </div>

      <!-- Sidebar -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header text-warning">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="inpug-group-append">
                <button class="btn btn-success" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Tags -->
        <div class="card my-4">
          <h5 class="card-header text-warning">Tags</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <?php the_tags( 
                    '<li><i >', '</i><li><i>', '</i></li>');?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>