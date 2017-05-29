<?php /*
Template Name: Сотрудники
Template Post Type: post
*/
get_header(); ?>

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

  <?php if (have_posts()): while (have_posts()) : the_post();  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php edit_post_link(); ?>
      <div class="row">
        <div class="col-md-12 hidden-xs">
          <div class="bottom-line">
            <div class="col-xs-6">
              <a href="">Салон</a>
            </div>
            <div class="col-xs-6">
              <a href="">Стилисты</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 visible-xs-block">
          <?php
          $current_category = get_the_category();
          $current_cat_id = $current_category[0]->cat_ID;
          ?>
          <a rel="nofollow" href="<?php echo get_category_link($current_cat_id); ?>" class="back-to-cat">
            Назад в <?php echo get_cat_name($current_cat_id);?>
          </a>
        </div>

      </div>
      <div class="row present-row">

        <div class="col-md-4 col-sm-4 present-left img-W">
<div class="pres-img img-H">
          <?php if ( has_post_thumbnail()) : ?>

              <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
              </a>

          <?php endif; ?>
</div>
        </div>
        <div class="col-md-8 col-sm-8">
          <div class="present-right">
            <h1 class="present-title"><?php the_title(); ?></h1>

            <?php if( get_field('description') ) { ?>
              <span class="short_desc">
                <?php the_field('description'); ?>
              </span>
            <?php } ?>

            <?php the_content(); ?>
            <div class="post__nav">

              <div class="prev"><?php echo get_adjacent_post_link( '%link', '<i class="fa fa-angle-left"></i>', 1 ); ?></div>
              <div class="next"><?php echo get_adjacent_post_link( '%link', '<i class="fa fa-angle-right"></i>', 1, '', false ); ?></div>

            </div>
          </div>

        </div>


      </div>

    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
