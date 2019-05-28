<?php get_header(); ?>

    <div class="container">
        <h1><?php single_cat_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="card mb-4">
              <div class="card-body">
                  <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>

                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid" alt="">
                <?php endif; ?>

                  <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
              </div>
          </div>

      <?php endwhile; endif; ?>
    </div>

<?php get_footer();
