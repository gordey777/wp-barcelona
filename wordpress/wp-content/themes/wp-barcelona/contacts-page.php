<?php /* Template Name: Contacts Page */ get_header(); ?>
  <div class="row visible-xs-block">
    <div class="col-md-12">
      <h1 class="mob-bread"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="row row-cont">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="col-md-12 flex-row">
          <?php edit_post_link(); ?>
          <div class="col-sm-8 col-md-push-4 map">
            <div class="row">
              <iframe class="cont-map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5416.4778667581795!2d61.30671523521003!3d55.194666550027726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x43c5936ae0c07b2d%3A0x388fc3b4cad0f7fc!2z0JrQvtC80YHQvtC80L7Qu9GM0YHQutC40Lkg0L_RgNC-0YHQv9C10LrRgiwgNzgsINCn0LXQu9GP0LHQuNC90YHQuiwg0KfQtdC70Y_QsdC40L3RgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRltGPLCA0NTQwMTQ!3m2!1d55.194903!2d61.311660999999994!5e0!3m2!1suk!2sua!4v1495643432062" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-sm-4 content col-md-pull-8">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div><!-- /.row -->
<?php get_footer(); ?>
