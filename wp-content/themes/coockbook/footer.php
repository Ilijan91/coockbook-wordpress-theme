<!-- Footer -->
<footer class="py-5" style="background-color: #18293C">
  <div class="container">
    <nav class="navbar sticky-bottom  navbar-expand-lg navbar-light sticky-bottom">
      <div class="container">
        <span class="navbar-brand text-success"><img src="/wp-content/themes/coockbook/assets/images/orange.svg" alt="logo"><?php echo get_bloginfo('name'); ?></span>

        <div class="collapse navbar-collapse">
          <?php
          wp_nav_menu(
            array(
              'menu' => 'Footer menu',
              'container' => '',
              'theme_location' => 'footer',
              'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>',
            )
          );
          ?>
        </div>
      </div>
    </nav>
    <hr style="background-color:#567084">
    <p style="color:#567084" class="m-0 text-right">TrinityRank &copy; Coockbook</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<?php wp_footer(); ?>

</body>

</html>