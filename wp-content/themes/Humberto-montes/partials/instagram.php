<section class="main-instagram">
  <div class="main-instagram__title">
    <i class="fa fa-instagram"></i>
    <h1>
      Síguenos
    </h1>

  </div>
  <div class="container">
    <?php if(wp_is_mobile()): ?>
      <?php echo do_shortcode('[instagram-feed cols=2 num=2]'); ?>
    <?php else: ?>
      <?php echo do_shortcode('[instagram-feed]'); ?>
    <?php endif; ?>
  </div>
  <div class="main-instagram__content container">

    <!-- <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div>
    <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div>
    <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div>
    <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div>
    <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div>
    <div class="main-instagram__items">
      <div class="main-img__instagram">
        <img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/tarjeta3 (1).jpg">
      </div>
    </div> -->
  </div>
</section>