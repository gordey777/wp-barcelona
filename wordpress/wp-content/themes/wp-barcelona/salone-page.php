<?php /* Template Name: Salon Page */ get_header(); ?>
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
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="col-md-12 content"><?php edit_post_link(); ?>
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>

      </article>
    <?php endwhile; endif; ?>

  </div><!-- /.row -->
        <?php if( have_rows('page_slider') ): ?>
        <div id="salone_slider" class="owl-carousel owl-theme">
          <?php while ( have_rows('page_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <?php $link = get_sub_field('link'); ?>
            <div class="item" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>
              <?php if ( !empty($image)) : ?>
                <a class="salone_slide" rel="lightbox" href="<?php echo $image['url']; ?>">

                </a>
              <?php endif; ?>
            </div>
          <?php  endwhile; ?>
        </div>
      <?php endif; ?>
  <div class="hidden-xs">
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>
