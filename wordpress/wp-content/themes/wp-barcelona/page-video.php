<?php /* Template Name: Videos Page */ get_header(); ?>



    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php if( have_rows('video_gallery' ) ): ?>
            <?php
            $rows = get_field('video_gallery' ); // get all the rows
            $first_row = $rows[0]; // get the first row
            $first_row_video = $first_row['video' ]; // get the sub field value
            $first_row_image = $first_row_video['thumbs']["maximum"]['url']; // get the sub field value
            $first_row_iframe = $first_row_video['iframe']; // get the sub field value
            ?>
            <div class="row" id="content-video">
              <div class="col-md-12 visible-xs-block">
                <h1 class="page-title inner-title"><?php the_title(); ?></h1>
              </div>
              <div class="col-md-12">
                <div id="top-container" style="position:relative;">
                  <div id="main-video" class="videoholder">
                    <div class="video_play_overlay_layer"></div>
                    <img id="video-placeholder" class="video-placeholder" data-videourl="" data-videoplayer="main-video-frame" src="<?php echo $first_row_image; ?>" alt="" />
                    <iframe id="main-video-frame" width="1170" height="658" src="https://www.youtube.com/embed/<?php echo $first_row_video['vid']; ?>" style="display:none;" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="v-text opacity-transition black20">
                    <div id="main-video-description">
                      <h2></h2>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="video-container" class="row row-flax">
            <?php edit_post_link(); ?>
              <?php
              $i = 0;
              while ( have_rows('video_gallery' ) ) : the_row(); ?>
                <?php $i++;
                $video = get_sub_field('video');?>
                  <div class="col-md-3 col-sm-4">
                    <div id="videouniquenumber_<?php echo $i; ?>" class="span3 filter-all filter-various" data-item_page="">
                      <div class="transparent">
                        <a href="javascript:void(0)" data-video="https://www.youtube.com/embed/<?php echo $video['vid']; ?>" data-bigimage="<?php echo $video['thumbs']["maximum"]['url']; ?>" data-pushurl="" data-sharetitle="">
                          <div class=" col-md-12 col-xs-6">
                            <div class="row">
                              <div class="video-thumb">
                                <div class="now_playing">NOW PLAYING</div>
                                <div class="video_play_overlay_layer little-player"></div>
                                <img src="<?php echo $video['thumbs']["medium"]['url']; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 col-xs-6">
                            <div class="row">
                              <div class="box-content">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <p><?php the_sub_field('desc'); ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="video-featured-description">
                            <h2><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('desc'); ?></p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
              <?php  endwhile; ?>
              <div class="clear"></div>
            </div><!-- #video-container -->
          <?php endif; ?>

    </article>
  <?php endwhile; endif; ?>




<?php get_footer(); ?>

