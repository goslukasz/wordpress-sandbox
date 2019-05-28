<?php get_header(); ?>

    <div class="container">
        <h1>Recent POSTS</h1>

      <?php
      if (have_posts()) {
        while(have_posts()) {
          the_post();

          echo '<h2>';
          the_title();
          echo '</h2>';
          the_content();
        }
      }
      ?>
    </div>

<?php get_footer();
