<?php /* Template Name: Videos Page */ get_header(); ?>



  <div class="row">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php edit_post_link(); ?>
        <div class="col-md-12 content">
          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

            <?php if( have_rows('video_galery' ) ): ?>
                    <div id="top-container" style="position:relative;">
                      <div id="main-video" class="videoholder">
                        <div class="video_play_overlay_layer"></div>
                <?php
                $rows = get_field('video_galery' ); // get all the rows
                $first_row = $rows[0]; // get the first row
                $first_row_video = $first_row['video' ]; // get the sub field value
                $first_row_image = $first_row_video['thumbs']["maximum"]['url']; // get the sub field value
                $first_row_iframe = $first_row_video['iframe']; // get the sub field value

                ?>

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




              <div id="video-container" data-current_page="" data-total_pages="">
                <?php
                $i = 0;
                while ( have_rows('video_galery' ) ) : the_row(); ?>
                  <?php $i++;
                  $video = get_sub_field('video');

// array(5) {
//   ["title"]=> string(60) "+100500 - Первый Русский Трансформер"
//   ["vid"]=> string(11) "hb3tS_zq5kw"
//   ["url"]=> string(43) "https://www.youtube.com/watch?v=hb3tS_zq5kw"
//   ["thumbs"]=> array(5) {
//     ["default"]=> array(3) {
//       ["url"]=> string(46) "http://i1.ytimg.com/vi/hb3tS_zq5kw/default.jpg"
//       ["width"]=> int(120)
//       ["height"]=> int(90) }
//     ["medium"]=> array(3) {
//       ["url"]=> string(48) "http://i1.ytimg.com/vi/hb3tS_zq5kw/mqdefault.jpg"
//       ["width"]=> int(320)
//       ["height"]=> int(180) }
//     ["high"]=> array(3) {
//       ["url"]=> string(48) "http://i1.ytimg.com/vi/hb3tS_zq5kw/hqdefault.jpg"
//       ["width"]=> int(480)
//       ["height"]=> int(360) }
//     ["standard"]=> array(3) {
//       ["url"]=> string(48) "http://i1.ytimg.com/vi/hb3tS_zq5kw/sddefault.jpg"
//       ["width"]=> int(640) ["height"]=> int(480) }
//     ["maximum"]=> array(3) {
//       ["url"]=> string(52) "http://i1.ytimg.com/vi/hb3tS_zq5kw/maxresdefault.jpg"
//       ["width"]=> int(640)
//       ["height"]=> int(480)
//     }
//   }
//   ["iframe"]=> string(124) '<iframe src="https://www.youtube.com/embed/hb3tS_zq5kw" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>'
// }
 ?>
               <div class="col-md-4 c0l-sm-4 col-xs-6">

                      <div id="videouniquenumber_<?php echo $i; ?>" class="span3 filter-all filter-various" data-item_page="">
                        <div class="transparent">
                          <a href="javascript:void(0)" data-video="https://www.youtube.com/embed/<?php echo $video['vid']; ?>" data-bigimage="<?php echo $video['thumbs']["maximum"]['url']; ?>" data-pushurl="" data-sharetitle="">
                            <div class="video-thumb">
                              <div class="now_playing">NOW PLAYING</div>
                              <div class="video_play_overlay_layer little-player"></div>
                              <img src="<?php echo $video['thumbs']["medium"]['url']; ?>">
                            </div>
                            <div class="box-content">
                              <h2><?php the_sub_field('title'); ?></h2>
                              <p><?php the_sub_field('desc'); ?></p>
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
              </div>
            <?php endif; ?>

                      <div class="clear"></div>
                    </div>
                    <!-- #video-container -->


    </div>

      </article>
    <?php endwhile; endif; ?>


  </div><!-- /.row -->



<?php get_footer(); ?>

