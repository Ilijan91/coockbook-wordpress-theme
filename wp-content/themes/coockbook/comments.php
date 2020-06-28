<div class="media mb-4">
  <div class="media-body">
    <?php
    wp_list_comments(
      array(
        'avatar_size' => 50,
        'style' => 'div',
      )
    );
    ?>
  </div>
</div>
<div class="card my-4">
  <div class="card-body">
    <?php
    if (comments_open()) {
      comment_form();
    }

    ?>
  </div>
</div>