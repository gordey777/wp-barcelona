  <?php if( have_rows('main_slider', 31 ) ): ?>
    <div id="home_slider" class="owl-carousel owl-theme hidden-xs">
      <?php while ( have_rows('main_slider', 31 ) ) : the_row(); ?>
        <?php $image = get_sub_field('img'); ?>
        <?php $link = get_sub_field('link'); ?>
        <div class="item" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>

          <?php  if ( !empty($link)) { ?>
            <a href="<?php the_sub_field('link'); ?>">
          <?php } ?>

            <span class="slide-title"><?php the_sub_field('title'); ?></span>
          <?php  if ( !empty($link)) { ?>
            </a>
          <?php } ?>
        </div>
      <?php  endwhile; ?>
    </div>
  <?php endif; ?>
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php edit_post_link(); ?>
      <div class="col-md-12 content">
        <h1 class="cat-title inner-title"><?php if( is_category() ) echo get_queried_object()->name; ?></h1>
        <?php if(category_description()) { ?>
          <div class="title-decs">
            <?php echo category_description( ); ?>
          </div>
        <?php } ?>
      </div>

        <?php if (have_posts()): ?>
          <div class="col-md-12">
            <div class="row flex-row">
              <?php while (have_posts()) : the_post(); ?>
                <div class="col-sm-4 col-xs-6">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('looper workers-block img-W'); ?>>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="presents-link">
                        <div class="img-presents img-H">
                          <?php if ( has_post_thumbnail()) { ?>
                            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } else { ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } ?>
                        </div>
                        <h3 class="title">
                          <?php the_title(); ?>
                        </h3>
                      </a>
                      <div class="desc"><?php wpeExcerpt('wpeExcerpt20'); ?></div>
                      <div class="bot-line"><?php the_field('description'); ?></div>
                    </div><!-- /looper -->
                </div>
              <?php endwhile; ?>
            </div>
          </div>
          <?php get_template_part('pagination'); ?>
        <?php endif; ?>
    </article>
  </div><!-- /.row -->
  <div class="hidden-xs">
    <?php get_sidebar(); ?>
  </div>

