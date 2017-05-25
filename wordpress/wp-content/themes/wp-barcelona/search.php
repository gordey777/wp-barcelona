<?php get_header(); ?>

  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="col-md-12 content">
        <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </article>
    <?php get_sidebar(); ?>
  </div><!-- /.row -->

<?php get_footer(); ?>



