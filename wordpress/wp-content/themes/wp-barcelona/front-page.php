<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php edit_post_link(); ?>

      <?php if( have_rows('main_slider') ): ?>
        <div id="home_slider" class="owl-carousel owl-theme">
          <?php while ( have_rows('main_slider') ) : the_row(); ?>
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
        <div class="col-md-12">
          <div class="bottom-line">
            <div class="col-xs-6">
              <a href="">Салон</a>
            </div>
            <div class="col-xs-6">
              <a href="">Стилисты</a>
            </div>
          </div>
        </div>

        <div class="col-sm-8">
          <div class="video-block lightblueshadow">
            <?php

            $posts = get_field('video_block');

            if( $posts ): ?>
              <?php foreach( $posts as $post ): ?>
                <?php setup_postdata($post); ?>
                <a href="<?php echo get_permalink(); ?>">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a>

                <div class="video-desc">
                  <h3><?php the_title(); ?></h3>
                  <p><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                </div>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <a href="<?php echo get_category_link(12); ?>" class="video-button">
              <?php echo get_cat_name(12);?>
            </a>
          </div><!-- /.video-block -->
        </div>

        <div class="col-sm-4">
          <div class="gifts-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/presents_bg.jpg" alt="">
          </div>
        </div><!-- /.gifts-block -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->
    </article>
  <?php endwhile; endif; ?>



<?php get_footer(); ?>
