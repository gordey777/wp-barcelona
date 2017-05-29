<?php get_header(); ?>
  <article>
    <div class="row">
      <div class="col-md-12">
        <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
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

<?php get_footer(); ?>


  <?php if( have_rows('main_slider', 31 ) ): ?>
    <div id="home_slider" class="owl-carousel owl-theme">
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
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php edit_post_link(); ?>
        <div class="col-md-12 content">
          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>

            <?php if( have_rows('video_galery' ) ): ?>
              <div id="video-list" class="">
                <?php while ( have_rows('video_galery' ) ) : the_row(); ?>
                  <?php $video = get_sub_field('video');

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
                    <?php echo $video['iframe']; ?>
                    <img src="<?php echo $video['thumbs']["medium"]['url']; ?>" alt="">
                    <?php } ?>
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
