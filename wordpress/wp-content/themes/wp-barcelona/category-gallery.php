  <div class="row visible-xs-block">
    <div class="col-md-12">
      <h2 class="mob-bread white"><?php if( is_category() ) echo get_queried_object()->name; ?></h2>
    </div>
  </div>
  <div class="row">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (have_posts()): ?>
          <div class="col-md-12 collections-list">
              <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('looper collection-block coll-img-W'); ?>>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-link">
                        <div class="coll-img coll-img-H">
                          <?php if ( has_post_thumbnail()) { ?>
                            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } else { ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } ?>
                        </div>
                        <div class="desc">
                          <h3 class="title">
                            <?php the_title(); ?>
                          </h3>
                          <div class="short-desc"><?php the_field('desc'); ?></div>
                        </div>
                       </a>
                    </div><!-- /looper -->
                </div>
              <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </article>
  </div><!-- /.row -->
