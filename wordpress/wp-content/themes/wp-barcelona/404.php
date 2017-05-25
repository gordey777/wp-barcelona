<?php get_header(); ?>

  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="col-md-12 content">
        <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </div>
    </article>
    <?php get_sidebar(); ?>
  </div><!-- /.row -->

<?php get_footer(); ?>


