<section id="contacto" class="main-contacto">
  <div class="mask">
    <div class="main-contacto__content container">
      <div class="main-contacto__form wow fadeInLeft"  data-wow-delay='.5s'>
        <div class="main-contacto__form--title">
          <h1>
            Contáctanos
          </h1>
        </div>
        <div class="container-contacto">

          <div class="formulario">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
          </div>
        </div>

      </div>
      <?php $args = array( 'post_type' => 'Contacto', 'posts_per_page' => 1);?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-contacto__redes" >
          <div class="main-cuadro__twitter">
            <i class="fa fa-envelope"></i>
            <p class="text-email"> 
              <a href="mailto:<?php the_field( 'correo' ); ?>">
              <?php the_field( 'correo' ); ?>
              </a>
          </p>
          </div>
          <div class="main-redes__contacto">
            
            <a href="<?php the_field( 'facebook' ); ?>" class="icono-facebook wow fadeIn" data-wow-delay='0.1s'  href="#">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="<?php the_field( 'twitter' ); ?>" class="icono-twitter wow fadeIn" data-wow-delay='0.2s' href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </a>
          <a href="<?php the_field( 'youtube' ); ?>" class="icono-youtube wow fadeIn" data-wow-delay='0.3s' href="#">
            <i class="fa fa-youtube"></i>
          </a>
          <a href="<?php the_field( 'instragram' ); ?>" class="icono-instagram wow fadeIn" data-wow-delay='0.4s' href="#">

            <i class="fa fa-instagram"></i>
          </a>
        </div>

        <?php endwhile; ?>
    </div>
  </div>
</div>
</section>
