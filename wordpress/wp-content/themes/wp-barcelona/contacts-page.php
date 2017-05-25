<?php /* Template Name: Contacts Page */ get_header(); ?>

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
          <iframe class="cont-map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5416.4778667581795!2d61.30671523521003!3d55.194666550027726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x43c5936ae0c07b2d%3A0x388fc3b4cad0f7fc!2z0JrQvtC80YHQvtC80L7Qu9GM0YHQutC40Lkg0L_RgNC-0YHQv9C10LrRgiwgNzgsINCn0LXQu9GP0LHQuNC90YHQuiwg0KfQtdC70Y_QsdC40L3RgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRltGPLCA0NTQwMTQ!3m2!1d55.194903!2d61.311660999999994!5e0!3m2!1suk!2sua!4v1495643432062" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </article>
    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
  </div><!-- /.row -->



<?php get_footer(); ?>

