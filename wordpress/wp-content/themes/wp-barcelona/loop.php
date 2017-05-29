<?php if (have_posts()): ?>
  <div class="row flex-row">

    <?php while (have_posts()) : the_post(); ?>

      <div class="col-md-3 col-sm-4 col-xs-6">
        <div id="post-<?php the_ID(); ?>" <?php post_class('looper cat-looper'); ?>>
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </a><!-- /post thumbnail -->
          <a class="loop-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
          <?php wpeExcerpt('wpeExcerpt20'); ?>
        </div><!-- /looper -->
      </div>

    <?php endwhile; ?>
  </div>
<?php endif; ?>
