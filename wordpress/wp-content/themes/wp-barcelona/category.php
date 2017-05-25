<?php get_header(); ?>


    <?php if ( in_category( array( '10' ) ) || post_is_in_descendant_category( array( '10' ) ) ) { ?>
      <?php include 'category-present.php'; ?>
    <?php }
    //elseif ( in_category( array( '63' ) ) || post_is_in_descendant_category( array( '63' ) ) ) {
    //  include 'single-txt.php';
    //}
    else { ?>
  <article>
    <div class="row">
      <div class="col-md-12">
        <h1 class="cat-title inner-title"><?php if( is_category() ) echo get_queried_object()->name; ?></h1>
      </div>
      <div class="col-md-12">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <div class="col-md-3 col-sm-6">
            <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
              <div class="col-md-12 col-xs-6">
                <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a><!-- /post thumbnail -->
              </div>

              <div class="col-md-12 col-xs-6">
                <h2 class="inner-title">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2><!-- /post title -->

                <?php wpeExcerpt('wpeExcerpt40'); ?>
              </div>
            </div><!-- /looper -->
          </div>
        <?php endwhile; endif; ?>

        <?php get_template_part('pagination'); ?>
      </div>

    </div><!-- /.row -->
  </article>

<?php } ?>
<?php get_footer(); ?>
