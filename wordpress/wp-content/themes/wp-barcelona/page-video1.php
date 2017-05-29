<?php /* Template Name: Videos1 Page */ get_header(); ?>

  <div class="row">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php edit_post_link(); ?>
        <div class="col-md-12 content">
          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

            <?php if( have_rows('video_galery' ) ): ?>
              <div id="videourl-block" class="col-md-12">
                <?php
                $rows = get_field('video_galery' ); // get all the rows
                $first_row = $rows[0]; // get the first row
                $first_row_video = $first_row['video' ]; // get the sub field value
                $first_row_image = $first_row_video['thumbs']["maximum"]['url']; // get the sub field value
                $first_row_iframe = $first_row_video['iframe']; // get the sub field value

                ?>
                <div class="video_plaseholder_wrap">
                  <img src="<?php echo $first_row_image; ?>" class="video_plaseholder"/>
                </div>
                <div class="video_iframe_wrap">
                  <iframe class="big-video" src="https://www.youtube.com/embed/<?php echo $first_row_video['vid']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
                </div>
              </div>
<script>
  jQuery(document).ready(function() {
    if (!is_a_mobile_device()) {
        $('#videourl-block .big-video').attr("src", 'https://www.youtube.com/embed/<?php echo $first_row_video['vid']; ?>?autoplay=1');
      }
});
</script>
              <div id="video-list" class="">
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
                <div class="item">
                  <?php if ( !empty('video')) { ?>
                  <?php //echo $video['iframe']; ?>
                  <div id="video-thumb-<?php echo $i; ?>" class="video-thumb-wrapp" data-video="https://www.youtube.com/embed/<?php echo $video['vid']; ?>" data-plaseholder="<?php echo $video['thumbs']["maximum"]['url']; ?>">
                  <img src="<?php echo $video['thumbs']["medium"]['url']; ?>" alt="<?php echo $video['title']; ?>">
                  <?php } ?></div>
              </div>


                      <span class="video-title"><?php the_sub_field('title'); ?></span>


                  </div>
                <?php  endwhile; ?>
              </div>
            <?php endif; ?>

    </div>

      </article>
    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
  </div><!-- /.row -->


<?php get_footer(); ?>

