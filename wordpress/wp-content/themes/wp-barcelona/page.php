<?php get_header(); ?>

  <div class="row">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="col-md-12 content">
          <h1 class="page-title inner-title"><?php the_title(); ?></h1><?php edit_post_link(); ?>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>

  </div><!-- /.row -->
  <?php //get_sidebar(); ?>
  <?php get_footer(); ?>

