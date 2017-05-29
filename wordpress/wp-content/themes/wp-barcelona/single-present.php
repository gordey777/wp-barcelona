<?php /*
Template Name: Подарок
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
          <?php if ( has_post_thumbnail()) : ?>
            <div class="pres-img img-H">
              <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-md-8 col-sm-8">
          <div class=" present-right">
            <h1 class="present-title"><?php the_title(); ?></h1>

            <?php if( get_field('brand') ) { ?>
              <span class="brand">
                Брэнд: <?php the_field('brand'); ?>
              </span>
            <?php } ?>

            <?php if( get_field('short_desc') ) { ?>
              <span class="short_desc">
                <?php the_field('short_desc'); ?>
              </span>
            <?php } ?>

            <?php the_content(); ?>

            <?php if( get_field('price') ) { ?>
              <span class="price">
                <?php the_field('price'); ?>
              </span>
            <?php } ?>
            <?php if( get_field('more_desc') ) { ?>
              <span class="more_desc">
                <?php the_field('more_desc'); ?>
              </span>
            <?php } ?>

          </div>

        </div>


      </div>
      <div class="row">

        <div class="col-md-12">
          <?php $categories = get_the_category($post->ID);
          if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
              'category__in' => $category_ids,
              'orderby'=>rand,
              'post__not_in' => array($post->ID),
              'showposts'=>15,
              'caller_get_posts'=>1,
              );

            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) { ?>
              <div id="recent-presents" class="row">
                <div class="col-md-12">
                  <h3>Вам также может понравиться</h3>
                </div>
                <div class="col-md-12">
                  <div id="presents-slider" class="owl-carousel owl-theme">

                    <?php while ($my_query->have_posts()) {
                        $my_query->the_post(); ?>
                          <?php
                          $category = get_the_category();
                          $cat_id = $category[0]->cat_ID;
                          ?>


                        <div class="item">
                          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                            <div class="img-wrap slide-img-H slide-img-W">
                                <?php if ( has_post_thumbnail()) :
                                  the_post_thumbnail('small');
                                else: ?>
                                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="item-title">
                              <?php the_title(); ?>

                            </div>
                          </a>
                          <a href="<?php echo get_category_link($cat_id); ?>" class="item-cat">
                            <?php echo get_cat_name($cat_id);?>
                          </a>
                        </div>
                    <?php } ?>
                  </div><!-- /#recent-presents -->
                </div>
              </div>
            <?php }
            wp_reset_query();
          } ?>
        </div>
      </div><!-- /.row -->
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
