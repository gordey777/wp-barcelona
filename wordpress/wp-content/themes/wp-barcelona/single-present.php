<?php /*
Template Name: Подарок
Template Post Type: post
*/
get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post();  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php edit_post_link(); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <?php if ( has_post_thumbnail()) : ?>
                <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
              <?php endif; ?>
            </div>
            <div class="col-md-8  col-sm-6">
              <div class="present-desc">
                <h1 class="single-title inner-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>

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
              'caller_get_posts'=>1);

            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) { ?>
              <div  id="recent-presents" class="row">
                <div class="col-md-12">
                  <h3>Вам также может понравиться</h3>
                </div>
                <div class="col-md-12">
                  <div id="presents-slider" class="owl-carousel owl-theme">

                    <?php while ($my_query->have_posts()) {
                        $my_query->the_post(); ?>

                        <div class="item">
                          <?php if ( has_post_thumbnail()) :?>
                            <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                              <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                            </a>
                          <?php endif; ?>
                          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
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
