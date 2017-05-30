<?php get_header(); ?>


    <?php if ( in_category( array( '10' ) ) || post_is_in_descendant_category( array( '10' ) ) ) { ?>
      <?php include 'category-present.php'; ?>
    <?php }
    elseif ( in_category( array( '11' ) ) || post_is_in_descendant_category( array( '11' ) ) ) { ?>
      <?php include 'category-workers.php'; ?>
    <?php }
    elseif ( in_category( array( '17' ) ) || post_is_in_descendant_category( array( '17' ) ) ) { ?>
      <?php include 'category-gallery.php'; ?>
    <?php }
    else { ?>
  <article>

    <div class="row">
      <div class="col-md-12">
        <h1 class="cat-title inner-title"><?php if( is_category() ) echo get_queried_object()->name; ?></h1>
      </div>
      <div class="col-md-12">

        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>

    </div><!-- /.row -->
  </article>

<?php } ?>
<?php get_footer(); ?>
