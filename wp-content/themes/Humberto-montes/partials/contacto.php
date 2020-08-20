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
      <div class="main-contacto__redes" >
        <div class="main-cuadro__twitter">
          <i class="fa fa-envelope"></i>
          <p class="text-email"> 
            <a href="mailto:info@humbertomontes.com">
              info@humbertomontes.com
            </a>
        </p>
        </div>
        <div class="main-redes__contacto">
          
          <a class="icono-facebook wow fadeIn" data-wow-delay='0.1s'  href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="icono-twitter wow fadeIn" data-wow-delay='0.2s' href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </a>
        <a class="icono-youtube wow fadeIn" data-wow-delay='0.3s' href="#">
          <i class="fa fa-youtube"></i>
        </a>
        <a class="icono-instagram wow fadeIn" data-wow-delay='0.4s' href="#">

          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</section>
