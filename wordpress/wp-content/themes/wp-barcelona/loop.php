<?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <div class="col-md-3 col-sm-4">
                      <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
                      <?php if ( has_post_thumbnail()) :?>
                        <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        </a>
                      <?php endif; ?>
                      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                      </a>
                      </div><!-- /looper -->
                    </div>

<?php endwhile; endif; ?>
