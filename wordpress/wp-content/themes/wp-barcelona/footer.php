      </div><!-- /.inner -->
    </div><!-- /.container -->
  </section><!-- /section -->

</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav>
          <?php wpeFootNav(); ?>
        </nav>
        <p class="copyright">
          &copy; <?php echo date("Y"); ?> BARCELONA.
        </p><!-- /copyright -->

      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->

  <!-- / MODAL VINDOW Order-->
  <div id="modal_callback" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content clearfix">
        <div class="modal-header">
        <span  data-dismiss="modal" aria-label="Close" class="close-nav close-video">X</span>
          <div class="button-wrap close" data-dismiss=modal aria-hidden=true>
            <span class="top-line"></span>
          </div>
          <h4 class="modal-title">Обратный звонок</h4>
        </div>
        <div class="modal-body">
          <div class="col-xs-12">
            <?php echo do_shortcode('[contact-form-7 id="30" title="Модальное Обратный звонок"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<span id="scrool_top" class="go-top">UP</span>

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <?php if ( is_page_template('page-video.php') ) { ?>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/video-scripts.js'></script>
  <?php } ?>
</body>
</html>
