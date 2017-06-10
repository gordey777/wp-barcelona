<div class="row visible-xs-block">
  <div class="col-md-12">
    <h2 class="mob-bread white"><?php if( is_category() ) echo get_queried_object()->name; ?></h2>
  </div>
</div>
  <article>
    <div class="row news-row">
      <div class="col-md-12">
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </div><!-- /.row -->
  </article>
