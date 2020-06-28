<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
 <!-- Bootstrap , CSS -->
  <?php wp_head(); ?>
   <!-- Bootstrap  CSS -->



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light fixed-top shadow p-3 mb-5 rounded">
    <div class="container">
      <span class="navbar-brand text-success">
        <img src="/wp-content/themes/coockbook/assets/images/orange.svg" alt="logo">
          <?php echo get_bloginfo('name'); ?></span>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

    <?php 
        wp_nav_menu( 
            array(
                'menu' => 'Header menu',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>',
            )
        );
    ?>  
      </div>
    </div>
  </nav>


  