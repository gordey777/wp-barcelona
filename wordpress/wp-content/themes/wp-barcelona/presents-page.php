<?php /* Template Name: Presents Page */ get_header(); ?>

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

        </div>

          <?php
           $args = array(
                  'cat' => '10', //ID Рубрики
                  //'orderby'=>rand,
                  'post_type' => 'post',
                  'posts_per_page' => 6, //Количество постов в блоке Новости
                  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
          query_posts($args); ?>

          <?php if (have_posts()): ?>
            <div class="col-md-12">
              <div class="row flex-row">
                <?php while (have_posts()) : the_post(); ?>
                  <div class="col-sm-4 col-xs-6">
                      <div id="post-<?php the_ID(); ?>" <?php post_class('looper presents-block'); ?>>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="presents-link">

                          <div class="img-presents">
                            <?php if ( has_post_thumbnail()) { ?>
                              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                            <?php } else { ?>
                              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                            <?php } ?>
                          </div>

                          <?php
                          $category = get_the_category();
                          $cat_id = $category[0]->cat_ID;
                          ?>
                          <h3 class="title">
                            <?php the_title(); ?>
                          </h3>
                         </a>
                        <div class="desc hidden-xs">
                          <p class="short-desc"><?php the_field('short_desc'); ?></p>
                        </div>

                        <a href="<?php echo get_category_link($cat_id); ?>" class="bot-line hidden-xs">
                          <?php echo get_cat_name($cat_id);?>
                        </a>

                      </div><!-- /looper -->
                  </div>
                <?php endwhile; ?>
              </div>
            </div>

            <?php get_template_part('pagination'); ?>
            <?php wp_reset_query(); ?>

          <?php endif; ?>

      </article>
    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
  </div><!-- /.row -->



<?php get_footer(); ?>

