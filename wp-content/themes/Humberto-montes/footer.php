<footer class="main-end">
  <div class="main-end__content container">
    <div class="main-end__logo">
      <img class="img-logo__end" src="<?php echo get_template_directory_uri();?>/assets/img/logo_color.svg">
    </div>
    <div class="main-end__text">
      <p class="text-end">
        Copyright © Humberto Montes 2020
      </p>
      <p class="text-end">
        Powered by <a class="link-end" href="#">Slice Group</a> 
        y
        <a class="link-end" href="#">We can! Company</a> 
      </p>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo do_shortcode('[user_registration_form id="86"]'); ?>
      </div>
     
    </div>
  </div>
</div>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
<script>
  new WOW().init();
</script>
  <?php wp_footer(); ?>
</body>
</html>