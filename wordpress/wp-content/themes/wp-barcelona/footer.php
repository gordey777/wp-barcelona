      </div><!-- /.inner -->

  </section><!-- /section -->
    </div><!-- /.container -->

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

  <!-- / MODAL VINDOW-->
  <div id="modal_registration" class="modal__form modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content clearfix">
        <div class="modal-header">
          <div  data-dismiss="modal" aria-label="Close" class="close-nav close-video"><i class="fa fa-times-circle"></i></div>
          <h4 class="modal-title">Регистрация</h4>
        </div>
        <div class="modal-body">
          <div class="col-xs-12">
            <?php echo do_shortcode('[contact-form-7 id="218" title="Регистрация"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--   <div id="modal_entry" class="modal__form modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content clearfix">
      <div class="modal-header">
        <div data-dismiss="modal" aria-label="Close" class="close-nav close-video"><i class="fa fa-times-circle"></i></div>
        <h4 class="modal-title">Запись</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12">
          <?php echo do_shortcode('[contact-form-7 id="219" title="Онлайн-заявка"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div> -->

<span id="scrool_top" class="go-top"><i class="fa fa-caret-up"></i></span>

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <?php if ( is_page_template('page-video.php') ) { ?>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/video-scripts.js'></script>
  <?php } ?>

<!-- Скрипт для АРНИКИ -->
  <script type="text/javascript" src="//app.arnica.pro/booking/script?orgid=28060"></script>
<!-- /Скрипт для АРНИКИ -->
</body>
</html>
