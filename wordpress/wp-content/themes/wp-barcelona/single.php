<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>          <?php edit_post_link(); ?>
      <div class="row">
        <div class="col-md-12 visible-xs-block">
          <?php
          $current_category = get_the_category();
          $current_cat_id = $current_category[0]->cat_ID;
          ?>
          <a rel="nofollow" href="<?php echo get_category_link($current_cat_id); ?>" class="back-to-cat">
            Назад в <?php echo get_cat_name($current_cat_id);?>
          </a>
        </div>
        <div class="col-md-12 content">
          <h1 class="single-title inner-title"><?php the_title(); ?></h1>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

        <div class="col-md-12" id="recent_posts">
          <?php $categories = get_the_category($post->ID);
          if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
              'category__in' => $category_ids,
              'orderby'=>rand,
              'post__not_in' => array($post->ID),
              'showposts'=>99,
              'caller_get_posts'=>1);

            query_posts($args); ?>
            <?php get_template_part('loop'); ?>
            <?php wp_reset_query(); ?>
          <?php } ?>

        </div>
      </div><!-- /.row -->
    </article>


    <?php endwhile; endif; ?>

<?php get_footer(); ?>
