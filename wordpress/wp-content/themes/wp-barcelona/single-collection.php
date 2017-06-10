<?php /*
Template Name: Коллекция
Template Post Type: post
*/
get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post();  ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="row">
        <div class="col-md-12 visible-xs-block">
          <?php
          $current_category = get_the_category();
          $current_cat_id = $current_category[0]->cat_ID;
          ?>
          <a rel="nofollow" href="<?php echo get_category_link($current_cat_id); ?>" class="back-to-cat">
            <i class="fa fa-angle-left"></i>Назад в <?php echo get_cat_name($current_cat_id);?>
          </a>
        </div>
      </div>
      <div class="row present-row">
        <div class="col-md-4 col-sm-4 present-left img-W"><?php edit_post_link(); ?>
          <div class="pres-img img-H">
            <div id="img__slider">
              <div class="img__slide">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
              </div>
              <?php if( get_field('video') ) { ?>
                <div class="img__slide" style="display: none;">
                  <div class="video_wrapp">
                    <video autoplay="" loop="">
                      <source src="<?php echo the_field('video'); ?>" type="video/mp4"> This browser doesn't support HTML5 Video;
                    </video>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <div class="collection-right">
            <div class="coll-content">
              <h1 class="present-title"><?php the_title(); ?></h1>
  <!--               <?php //if( get_field('desc') ) { ?>
    <span class="short_desc">
      <?php //the_field('desc'); ?>
    </span>
  <?php //} ?> -->
                <?php the_content(); ?>
            </div>

            <?php if( have_rows('products_slider') ): ?>
              <div id="prod-slider" class="owl-carousel owl-theme">
                <?php while ( have_rows('products_slider') ) : the_row(); ?>
                  <?php $image = get_sub_field('img'); ?>
                  <div class="item">
                    <div class="prod-img" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>
                    </div>
                    <span class="slide-title"><?php the_sub_field('title'); ?></span>
                    <span class="sub-title"><?php the_sub_field('sub_title'); ?></span>
                    <div class="prod-desc"><?php the_sub_field('desc'); ?></div>
                  </div>
                <?php  endwhile; ?>
              </div>
              <div id="customNav" class="owl-nav"><div class="counter"></div></div>
            <?php endif; ?>

          </div>
        </div>
        <div class="col-md-12 instructions">
          <div class="wrapper">
            <?php if( have_rows('instructions') ): ?>
                <h4 class="inst-title">Как</h4>
                <div class="inst-row">
                  <?php while ( have_rows('instructions') ) : the_row(); ?>
                    <div class="content"><?php the_sub_field('item'); ?></div>
                  <?php  endwhile; ?>
                </div>
                <div class="show_more visible-xs-block">Читать больше<i class="fa fa-angle-down"></i></div>
            <?php endif; ?>
          </div>
        </div>
      </div><!-- /.present-row -->
    </article>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
