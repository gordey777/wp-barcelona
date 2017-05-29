        <div class="clearfix"></div>

        <?php if( have_rows('shape_block', 31) ): ?>
          <div class="col-sm-4">
            <?php while ( have_rows('shape_block', 31) ) : the_row(); ?>
            <div class="shape-block lightblueshadow">
              <?php $image = get_sub_field('img'); ?>
              <div class="shape-img">
                <?php if ( !empty($image)) : ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>" />
                <?php endif; ?>
                <span class="title"><?php the_sub_field('title'); ?></span>
                <span class="name"><?php the_sub_field('name'); ?></span>
              </div>
              <?php if( have_rows('socials') ): ?>
                <div class="socials">
                  <?php while ( have_rows('socials') ) : the_row(); ?>
                    <a class="soc-link" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('sub_title'); ?>">
                      <i class="fa <?php the_sub_field('icon'); ?>"></i>
                    </a>
                  <?php  endwhile; ?>
                </div>
              <?php endif; ?>
              <span class="hash"><?php the_sub_field('hash'); ?></span>


            </div><!-- /.shape-block -->
            <?php  endwhile; ?>
          </div>
        <?php endif; ?>


          <?php
           $args = array(
                  'cat' => '9', //ID Рубрики
                  'orderby'=>rand,
                  'post_type' => 'post',
                  'posts_per_page' => 1, //Количество постов в блоке Новости
                  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
          query_posts($args); ?>

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
              <div class="news-block lightblueshadow">
                <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-link">
                    <div class="img-news">
                      <?php if ( has_post_thumbnail()) { ?>
                        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php } else { ?>
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <?php } ?>
                    </div>
                    <div class="desc">
                      <h3>
                        <?php the_title(); ?>
                      </h3>
                      <?php wpeExcerpt('wpeExcerpt20'); ?>
                      <span class="read">Читать</span>
                    </div>
                  </a>
                  <a href="<?php echo get_category_link(9); ?>" class="news-button">
                    <?php echo get_cat_name(9);?>
                  </a>

                </div><!-- /looper -->
              <?php endwhile; ?>

              <?php wp_reset_query(); ?>
            </div>
          </div><!-- /.news-block -->
        <?php endif; ?>

        <div class="col-sm-4">
          <div data-toggle="modal" data-target="#modal_callback" class="reg-form lightblueshadow">

            <span>Регистрируйтесь для получения привилегий и выгодных предложений салона</span>
          </div><!-- /.cont-form -->
        </div>

        <div class="clearfix"></div>

        <div class="col-md-4 col-md-offset-4">
          <a href="#" class="tel-button lightblueshadow">+7 (351) 742 88 03</a>
        </div>
