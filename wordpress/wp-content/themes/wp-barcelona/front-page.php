<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



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

      <div class="row hidden-xs">
        <div class="col-md-12">
          <div class="bottom-line">
            <div class="col-xs-6">
              <a href="<?php the_permalink(35); ?>" class="col-md-9 col-md-offset-3">Салон</a>
            </div>
            <div class="col-xs-6">
              <a href="<?php echo get_category_link(11); ?> " class="col-md-9">Стилисты</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row flex-row">
        <div class="col-sm-8">
          <div id="front-video" class="video-block lightblueshadow">
            <?php if( have_rows('video_gallery', 118 ) ): ?>

              <?php
              $rows = get_field('video_gallery', 118 );
              $first_row = $rows[0];
              $first_row_video = $first_row['video' ];
              $first_row_image = $first_row_video['thumbs']["maximum"]['url'];
              $first_row_iframe = $first_row_video['iframe'];
              $first_row_title = $first_row['title'];
              $first_row_desc = $first_row['desc'];

              ?>
              <div class="video_plaseholder_wrap videoholder">
                <div class="placeholder_wrap" data-video="https://www.youtube.com/embed/<?php echo $first_row_video['vid']; ?>?autoplay=1"/>
                  <img id="video-placeholder" class="video-placeholder" src="<?php echo $first_row_image; ?>">
                </div>
                <div class="video_iframe_wrap">
                  <iframe class="big-video" src="" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="video-description">
                <h2><?php echo $first_row_title; ?></h2>
                <a href="<?php the_permalink(118); ?>" class="video-desc"><?php echo $first_row_desc; ?></a>
              </div>

            <?php endif; ?>
          <a href="<?php the_permalink(118); ?>" class="video-button">
            Видео
          </a>
          </div><!-- /.video-block -->
        </div>

        <div class="col-sm-4">
        <?php edit_post_link(); ?>
          <a href="<?php echo get_category_link(10); ?>" class="gifts-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/presents_bg.jpg" alt="">
            <h4 class="gift_title"><?php echo get_cat_name(10);?></h4>
          </a><!-- /.gifts-block -->
        </div>

      </div><!-- /.row -->

      <?php get_sidebar(); ?>
    </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
